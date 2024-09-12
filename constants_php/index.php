<?php
const name = "Ahmed"; //syntax of constant
echo name; //here we if we use dollar sign to call/use constant value it will throw an error so always call constant without dollar sign


// const $name= "ahmed";  This is wrong
// echo my name is $name;// this is wrong; 


// we can't redefine or change the value of constants in PHP(as in other languages we know constants are not changeable.)

const NAME = "Ali";
echo NAME; // here name and NAME are different.


// Other than this work same in PHP as in other languages.


//  by this method we can also define constants
define("std_Name", "Usman");

echo std_Name;
