<?php

class EmployeeFactory
{
    static function createManager($name): Employee
    {
        return new Employee($name, "Manager", "15000000");
    }

    static function createStaffIT($name): Employee
    {
        return new Employee($name, "Staff IT", "10000000");
    }
}