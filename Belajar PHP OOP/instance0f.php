<?php

require_once "polymorphism.php";

sayHelloProgrammer(new Programmer("Aby"));
sayHelloProgrammer(new BackEndProgrammer("Aby"));
sayHelloProgrammer(new FrontEndProgrammer("Aby"));
