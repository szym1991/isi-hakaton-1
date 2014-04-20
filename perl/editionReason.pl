#!/usr/bin/perl

use constant false => 0;
use constant true  => 1;

@temp;
@remComment;
$counter;
$commentCounter;
$addToTemp = false;
$ifComment = false;
$multiComment = false;
$lineOfComment;
while(<>) {
	if($_ =~ /page/) {
		$addToTemp = false;
		$ifComment = false;
		$sizeTemp = @temp;
		for($i = 0; $i < $sizeTemp; $i++) {
			print $temp[$i];
		}
		@temp = ();
		$counter = 0;
	}
	
	if($_ =~ /revision/) {
		$addToTemp = true;
	}
	
	if($_ =~ /<comment/) {
		if($ifComment) {
			$remComment[$commentCounter++] = $_;
		}
		$ifComment = true;
		$multiComment = true;
		$lineOfComment = $counter;
	}
	if($multiComment) { 
		$remComment[$commentCounter++] = $_;
	}
	if($_ =~ /<\/comment/) {
		if($remComment[$commentCounter-1] ne $remComment[$commentCounter-2]) { 
			$remComment[$commentCounter++] = $_;
		}
		$multiComment =false;
		$sizeTemp = @temp;
		for($i = 0; $i < $sizeTemp; $i++) {
			print $temp[$i];
			if($temp[$i] =~ /<\/comment/) {
				$sizeComment = @remComment;
				for($j = 0; $j < $sizeComment; $j++) {
					$remComment[$j] =~ s/comment>/editionReason>/g;
					if($remComment[$j] ne $remComment[$j-1]) { 
						print $remComment[$j];
					}
				}
			}
		}
		@temp = ();
		$counter = 0;
		@remComment = ();
		$commentCounter = 0;
	}

	if($addToTemp) {
		$temp[$counter++] = $_;
	}
	
	if($addToTemp == false) {
		print $_;
	}
}
