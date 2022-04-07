<?php 
	
	// $quotes = readfile("readme.txt");
	// echo $quotes;

	$file = 'readme.txt';

	// Lecture 39
	if(file_exists($file)){

		// read file
		echo readfile($file) . '<br />';

		// copy file
		copy($file, 'quotes.txt');

		// absolute path
		echo realpath($file) . '<br />';

		// file size
		echo filesize($file) . '<br />';

		// rename the file
		rename($file, 'test.txt');

	} else {
		echo 'file does not exist';
	}

	// make directory
	// mkdir('quotes');

	// Lecture 40

	$file = 'quotes.txt'; 
	
	// opening a file for reading
	$handle = fopen($file, 'r');		// open file for read only

	// read the file
	echo fread($handle, filesize($file));	// read the whole file
	echo fread($handle, 112);			// read first 112 bytes of file

	// read a single line
	echo fgets($handle);		// read the first line from file 
	echo fgets($handle);		// read the second line from file since pointer place has changed

	// read a single character
	echo fgetc($handle);		// read the first char from file 
	echo fgetc($handle);		// read the second char from file since pointer place has changed

	$handle = fopen($file, 'r+');	// allow writing but it starts at first of doc and overwrite written data
	$handle = fopen($file, 'a+');	// allow writing at the end of the file

	// writing to a file
	fwrite($handle, "\nEverything popular is wrong.");

	// closing file
	fclose($file);	

	// delete file
	unlink($file);




?>