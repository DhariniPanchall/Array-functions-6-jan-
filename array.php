<?php
	#Arrays:

	//Index Array: with numeric index
	echo "<b><u>INdex array:</u></b>";
	$name = array("Abc", "Xyz", "Mno", "Pqrst"); 
	echo "<br>";
	for ($i=0; $i<count($name); $i++)
	{
		echo $name[$i];
		echo "<br>";
	}
	echo "<br>";
	
	//Associative Array: Key -> Value pair
	echo "<b><u>Associative array:</u></b>";
	$e_id = array("A"=> "12", "B"=> "2", "C" => "91");
	echo "<br>"; 
	foreach ($e_id as $a => $a_value) 
	{
		echo "Key = ".$a." Value = ".$a_value;
		echo "<br>";
	}
	echo "<br>";

	//Multidimentional Array: Contains one or more array
	echo "<b><u>Multidimentional array:</u></b>";
	echo "<br>";
	$studn = array(array("Asd","Science",30), array("fgh","Maths",14), array("jkl","Physics",49));
	for($md = 0; $md < 3; $md++)
	{
		echo "record $md:";		
		for($d = 0; $d < 3; $d++)
		{
			echo "<li>".$studn[$md][$d]."</li>";
		}
	}

	//Array Function:
	echo "<h3><p align = 'center'><u><b>Array Functions:</b></u></p></h3>";
	echo "<br/>";

	#count
	echo "<u>1. Count() Function:</u> returns the length of an array -> count(array_name); => <br>";
	echo count($name);
	echo "<br/>";
	echo "<br/>";

	#sort
	echo "<u>2. Sort() Function:</u> Sort array in an ascending order -> sort(array_name); => <br>";
	sort($name);
	for($x=0; $x< count($name); $x++)
	{
		echo $name[$x];
		echo "<br>";
	}
	echo "<br/>";

	#rsort
	echo "<u>3. rsort() Function:</u> Sort array in an descending order -> rsort(array_name); => <br>";
	rsort($name);
	for($x=0; $x< count($name); $x++)
	{
		echo $name[$x];
		echo "<br>";
	}
	echo "<br/>";

	#asort
	echo "<u>4. asort() Function:</u> Sort associative array in an ascending order according to value-> asort(array_name); => <br>";
	asort($e_id);
	foreach($e_id as $a => $a_value)
	{
		echo "Key = ".$a." Value = ".$a_value;
		echo "<br>";
	}
	echo "<br/>";

	#ksort
	echo "<u>5. ksort() Function:</u> Sort associative array in an ascending order according to key-> ksort(array_name); => <br>";
	ksort($e_id);
	foreach($e_id as $a => $a_value)
	{
		echo "Key = ".$a." Value = ".$a_value;
		echo "<br>";
	}
	echo "<br/>";

	#arsort
	echo "<u>6. arsort() Function:</u> Sort associative array in an descending order according to value-> arsort(array_name); => <br>";
	arsort($e_id);
	foreach($e_id as $a => $a_value)
	{
		echo "Key = ".$a." Value = ".$a_value;
		echo "<br>";
	}
	echo "<br/>";

	#krsort
	echo "<u>7. krsort() Function:</u> Sort associative array in an descending order according to key-> krsort(array_name); => <br>";
	krsort($e_id);
	foreach($e_id as $a => $a_value)
	{
		echo "Key = ".$a." Value = ".$a_value;
		echo "<br>";
	}
	echo "<br/>";

	#array_change_key_case() 
	echo "<u>8.array_change_key_case() Function:</u> it changes all keys in an array to lowercase or uppercase -> array_change_key_case(array, case), where case can be (CASE_LOWER or CASE_UPPER); used with associative array=> <br> ";
	print_r(array_change_key_case($e_id,CASE_LOWER));
	echo "<br/>";
	echo "<br/>";

	#array_chunk()
	echo "<u>9.array_chunk()Function:</u> it splits an array into chunks of new arrays -> array_chunk(array, size, preserve_key), where preserve_key can be (true or false) and size defines size of chunks => <br>";
	print_r(array_chunk($name,2,true));
	echo "<br/>";
	echo "<br/>";

	#array_column()
	echo "<u>10.array_column()Function:</u> it returns the values from a single column in the input array. -> array_column(array, column_key, index_key), used with Multidimentional array => <br>";
	$ac = array(array('id' => 5698,'first_name' => 'Peter','last_name' => 'Griffin',),array('id' => 4767,'first_name' => 'Ben','last_name' => 'Smith',),array('id' => 3809,'first_name' => 'Joe','last_name' => 'Doe',));
	print_r(array_column($ac, "first_name","id"));
	echo "<br/>";
	echo "<br/>";

	#array_combine() 
	echo "<u>11.array_combine() Function:</u> creates an array by using the elements from one 'keys' array and one 'values' array, where both array must have equal number f elements -> array_combine(keys, values) => <br>";
	$name2=array("bob","Ben","Joe");
	$nage=array("35","37","43");
	print_r(array_combine($nage,$name2));
	echo "<br/>";
	echo "<br/>";

	#array_count_values()
	echo "<u>12.array_count_values() function:</u> counts all the values of an array -> array_count_values(array) => <br>";
	$anmls= array("cat","monkey", "lion", "panda", "cat", "lion", "dog", "lion");
	print_r(array_count_values($anmls));
	echo "<br/>";
	echo "<br/>";

	#array_diff()
	echo "<u>13.array_diff() function:</u> compares the values of two (or more) arrays, and returns the differences -> array_diff(array1, array2, array3, ...) => <br>";
	$fruit1 = array("Apple", "Banana", "Peach", "Orange", "Watermelon");
	$fruit2 = array("Apple", "Banana", "Peach", "Melon", "Orange", "Starawberry");
	print_r(array_diff($fruit1, $fruit2));
	echo "<br/>";
	echo "<br/>";

	#array_diff_assoc()
	echo "<u>14.array_diff_assoc() function:</u> ccompares the keys and values of two (or more) arrays, and returns the differences ->array_diff_assoc(array1,array2,array3...) => <br>";
	$fruits1 = array("a"=>"Apple", "b"=>"Banana","c"=> "Peach","d" => "Orange","e"=> "Watermelon");
	$fruits2 = array("g"=>"Apple","b" => "Banana", "h"=>"Peach", "d"=>"Orange", "e"=>"Orange", "f"=>"Starawberry");
	print_r(array_diff($fruits1, $fruits2));
	echo "<br/>";
	echo "<br/>";	

	#array_diff_key()
	echo "<u>15.array_diff_key() function:</u> compares the keys of two (or more) arrays, and returns the differences ->array_diff_key(array1, array2, array3, ...) => <br>";
	print_r(array_diff_key($fruits1, $fruits2));
	echo "<br/>";
	echo "<br/>";

	#array_fill()
	echo "<u>16.array_fill() function:</u> fills an array with values. ->array_fill(index, number, value) => <br>";
	$col1=array_fill(3,3,"blue");
	$col2=array_fill(0,2,"red");
	print_r($col1);
	echo "<br>";
	print_r($col2);
	echo "<br/>";
	echo "<br/>";	

	#array_fill_keys()
	echo "<u>17.array_fill_keys() function:</u> fills an array with values, specifying keys ->array_fill_keys(keys, value) => <br>";
	$keys=array("a","b","c","d");
	$a1=array_fill_keys($keys,"blue");
	print_r($a1);
	echo "<br/>";
	echo "<br/>";

	#array_flip()	
	echo "<u>18.array_flip() function:</u> fills an array with values, specifying keys ->array_flip(array) => <br>";
	$color=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
	print_r(array_flip($color));
	echo "<br/>";
	echo "<br/>";

	#array_intersect()
	echo "<u>19.array_intersect() function:</u> compares the values of two (or more) arrays, and returns the matches ->array_intersect(array1, array2, array3, ...) => <br>";
	$co1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
	$co2=array("e"=>"red","f"=>"black","g"=>"purple");
	print_r(array_intersect($co1,$co2));
	echo "<br/>";
	echo "<br/>";

	#array_key_exists()
	echo "<u>20.array_key_exists() function:</u> checks an array for a specified key, and returns true if the key exists and false if the key does not exist.-> array_key_exists(key, array); => <br>";
	if(array_key_exists("a", $co1))
	{
		echo "key exist";
	}
	else
	{
		echo "key doesn't exist";
	}
	echo "<br/>";
	echo "<br/>";

	#array_keys()
	echo "<u>21.array_keys() function:</u> returns an array containing the keys-> array_keys(array, value, strict); => <br>";
	print_r(array_keys($co1));
	echo "<br/>";
	echo "<br/>";

	#array_merge()
	echo "<u>22.array_merge() function:</u> merges one or more arrays into one array-> array_merge(array1, array2, array3, ...); => <br>";
	print_r(array_merge($co1, $co2, $name));
	echo "<br/>";
	echo "<br/>";

	#array_multisort()
	echo "<u>23. array_multisort() function:</u> returns a sorted array, You can assign one or more arrays. The function sorts the first array, and the other arrays follow, then, if two or more values are the same, it sorts the next array, and so on -> array_multisort(array1, sortorder, sorttype, array2, array3, ...); => <br>";
	$ms = array("bat", "ant", "rat", "cat", "dog");
	array_multisort($ms);
	print_r($ms);
	echo "<br/>";
	echo "<br/>";

	#array_pad()
	echo "<u>24.array_pad() function:</u> inserts a specified number of elements, with a specified value, to an array -> array_pad(array, size, value); => <br>";
	print_r(array_pad($ms, 7,"lion"));
	echo "<br/>";
	echo "<br/>";

	#array_pop()
	echo "<u>25.array_pop() function:</u> deletes the last element of an array. -> array_pop(array); => <br>";
	print_r(array_pop($ms));
	echo "<br/>";
	echo "<br/>";

	#array_product()
	echo "<u>26.array_product() function:</u> calculates and returns the product of an array -> array_product(array); => <br>";
	$p = array(2,4);
	print_r(array_product($p));
	echo "<br/>";
	echo "<br/>";

	#array_push()
	echo "<u>27.array_push() function:</u>  inserts one or more elements to the end of an array -> array_push(array, value1, value2, ...); => <br>";
	array_push($p, "red", "sky");
	print_r($p);
	echo "<br/>";
	echo "<br/>";

	#array_rand()
	echo "<u>28.array_rand() function:</u>  returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key. -> array_rand(array, number); => <br>";
	print_r(array_rand($name));
	echo "<br/>";
	echo "<br/>";

	#array_reverse() 
	echo "<u>29.array_reverse() function:</u> returns an array in the reverse order -> array_reverse(array, preserve); => <br>";
	print_r(array_reverse($ms));
	echo "<br>";
	echo "<br>";

	#array_search()
	echo "<u>30.array_search() function:</u> search an array for a value and returns the key -> array_search(value, array, strict); => <br>";
	print_r(array_search("cat", $ms));
	echo "<br>";
	echo "<br>";

	#array_shift() 
	echo "<u>31.array_shift() function:</u> removes the first element from an array, and returns the value of the removed element -> array_shift(array); => <br>";
	print_r(array_shift($ms));
	echo "<br>";
	echo "<br>";

	#array_slice() 
	echo "<u>32.array_slice() function:</u> returns selected parts of an array. -> array_slice(array, start, length, preserve); => <br>";
	print_r(array_slice($ms, 2));
	echo "<br>";
	echo "<br>";


	#array_splice() 
	echo "<u>33.array_splice() function:</u> removes selected elements from an array and replaces it with new elements. The function also returns an array with the removed elements -> array_splice(array, start, length, array); => <br>";
	print_r(array_splice($ms,1));
	echo "<br>";
	echo "<br>";

	#array_values()
	echo "<u>34.array_values() function:</u> returns an array containing all the values of an array -> array_values(array); => <br>";
	print_r(array_values($name));
	echo "<br>";
	echo "<br>";

	#current()
	echo "<u>35.current() function:</u> returns the value of the current element in an array.-> current(array); => <br>";
	print_r(current($ms));
	echo "<br>";
	echo "<br>";	

	#in_array() 
	echo "<u>36. in_array() function:</u> searches an array for a specific value-> in_array(search, array, type) => <br>";
	print_r(in_array("Abc", $name));
	echo "<br>";
	echo "<br>";	
?>