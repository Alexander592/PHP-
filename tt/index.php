<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'student.php';
require_once 'group.php';
require_once 'Discipline.php';

function LoadStudents($group, $path) {
	$file = nl2br(file_get_contents($path));
	$students = explode('<br />', $file);
	foreach ($students as $s) {
		$tmp = explode(';', $s);
		$surname = $tmp[0];
		$name = $tmp[1];
		$patr = $tmp[2];
		new Student($name,$surname,$patr,$group);
	}
}

$g1 = new Group(1, 'И-01');
$g2 = new Group(1, 'И-02');
$g3 = new Group(1, 'И-03');
$s1 = new Student('Винокуров','Михаил','Игоревич', $g3);
$s2 = new Student('Бобровский','Константин','Михайлович', $g3);
$s2 = new Student('Бравлстарс','Эль','Примо', $g3);
$d1 = new Discipline(1, 'ППО');
$d2 = new Discipline(2, 'Оператор ЭВМ');
$d3 = new Discipline(3, 'Элементы высшей математики');
$d4 = new Discipline(4, 'Основы программирования');
$g3->AddDiscipline($d1);
$g3->AddDiscipline($d2);
$g3->AddDiscipline($d3);
$g3->AddDiscipline($d4);

LoadStudents($g3, 'i03.txt');
$g3->display();
?> 