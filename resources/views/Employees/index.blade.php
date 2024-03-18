<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employs</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>

        <h2>Все работники, отсортированные по зарплате</h2>
        <table style="border: 1px solid black">
            <tr >
                <th scope="col" style="border: 1px solid black; background-color: grey;">ID</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Name</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Birthday</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Position</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Salary</th>
            </tr>
            @foreach ($allEmployees as $employe)
            <tr>
                <th style="border: 1px solid black"> <?= $employe->id ?> </th>
                <td style="border: 1px solid black"> <?= $employe->name ?> </td>
                <td style="border: 1px solid black"> <?= $employe->birthday ?> </td>
                <td style="border: 1px solid black"> <?= $employe->position ?> </td>
                <td style="border: 1px solid black"> <?= $employe->salary ?> </td>
            </tr>
            @endforeach            
        </table>

        <h2>Все работники, с зарплатой 400 или id больше 4</h2>
        <table style="border: 1px solid black">
            <tr >
                <th scope="col" style="border: 1px solid black; background-color: grey;">ID</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Name</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Birthday</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Position</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Salary</th>
            </tr>
            @foreach ($salary400Employees as $employe)
            <tr>
                <th style="border: 1px solid black"> <?= $employe->id ?> </th>
                <td style="border: 1px solid black"> <?= $employe->name ?> </td>
                <td style="border: 1px solid black"> <?= $employe->birthday ?> </td>
                <td style="border: 1px solid black"> <?= $employe->position ?> </td>
                <td style="border: 1px solid black"> <?= $employe->salary ?> </td>
            </tr>
            @endforeach            
        </table>

        <h2>Работник с id 3</h2>
        <table style="border: 1px solid black">
            <tr >
                <th scope="col" style="border: 1px solid black; background-color: grey;">ID</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Name</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Birthday</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Position</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Salary</th>
            </tr>
            <tr>
                <th style="border: 1px solid black"> <?= $employees3->id ?> </th>
                <td style="border: 1px solid black"> <?= $employees3->name ?> </td>
                <td style="border: 1px solid black"> <?= $employees3->birthday ?> </td>
                <td style="border: 1px solid black"> <?= $employees3->position ?> </td>
                <td style="border: 1px solid black"> <?= $employees3->salary ?> </td>
            </tr>          
        </table>

         <h2>Имя работника с id 5 = <?= $NameEmployees5->name ?></h2>

         <h2>Все работники, с зарплатой от 400 до 800 или программист</h2>
        <table style="border: 1px solid black">
            <tr >
                <th scope="col" style="border: 1px solid black; background-color: grey;">ID</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Name</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Birthday</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Position</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Salary</th>
            </tr>
            @foreach ($employees400Prog as $employe)
            <tr>
                <th style="border: 1px solid black"> <?= $employe->id ?> </th>
                <td style="border: 1px solid black"> <?= $employe->name ?> </td>
                <td style="border: 1px solid black"> <?= $employe->birthday ?> </td>
                <td style="border: 1px solid black"> <?= $employe->position ?> </td>
                <td style="border: 1px solid black"> <?= $employe->salary ?> </td>
            </tr>
            @endforeach            
        </table>


        <h2>Сумма всех зарплат<?= $sumSalary ?> </h2>


        <h2>Cумма зарплат по проффесиям</h2>
        <table style="border: 1px solid black">
            <tr >
                <th scope="col" style="border: 1px solid black; background-color: grey;">Position</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">sum Salary</th>
            </tr>
            @foreach ($sumSalaryPosition as $employe)
            <tr>
                <td style="border: 1px solid black"> <?= $employe->position ?> </td>
                <td style="border: 1px solid black"> <?= $employe->total_salary ?> </td>
            </tr>
            @endforeach            
        </table>


        <h2>Все работники с днем рождения 25 числа</h2>
        <table style="border: 1px solid black">
            <tr >
                <th scope="col" style="border: 1px solid black; background-color: grey;">ID</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Name</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Birthday</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Position</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Salary</th>
            </tr>
            @foreach ($day25 as $employe)
            <tr>
                <th style="border: 1px solid black"> <?= $employe->id ?> </th>
                <td style="border: 1px solid black"> <?= $employe->name ?> </td>
                <td style="border: 1px solid black"> <?= $employe->birthday ?> </td>
                <td style="border: 1px solid black"> <?= $employe->position ?> </td>
                <td style="border: 1px solid black"> <?= $employe->salary ?> </td>
            </tr>
            @endforeach            
        </table>

        <h2>Все работники рожденные в 1990 году</h2>
        <table style="border: 1px solid black">
            <tr >
                <th scope="col" style="border: 1px solid black; background-color: grey;">ID</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Name</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Birthday</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Position</th>
                <th scope="col" style="border: 1px solid black; background-color: grey;">Salary</th>
            </tr>
            @foreach ($year1990 as $employe)
            <tr>
                <th style="border: 1px solid black"> <?= $employe->id ?> </th>
                <td style="border: 1px solid black"> <?= $employe->name ?> </td>
                <td style="border: 1px solid black"> <?= $employe->birthday ?> </td>
                <td style="border: 1px solid black"> <?= $employe->position ?> </td>
                <td style="border: 1px solid black"> <?= $employe->salary ?> </td>
            </tr>
            @endforeach            
        </table>


    </body>
</html>
