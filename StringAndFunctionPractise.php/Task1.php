<?php
/*������ 1: �� �� ������� ��������, ���� ����� �� �������� ��� ���� ���������
�� 40 ������ � ����� �����.
���� �������� �� ������ �� �� �������� �������� ���� � ������ � ����
� ����� �����.
������: Abcd Efgh
�����: ABCD abcd EFGH efgh */

require_once 'Readline.php';

$firstString = readline("Enter First String" . PHP_EOL);

$secondString = readline("Enter Second String" . PHP_EOL);

$firstStringToLower = strtolower($firstString);
$firstStringToUpper = strtoupper($firstString);

$secondStringToLower = strtolower($secondString);
$secondStringToUpper = strtoupper($secondString);

echo $firstStringToLower, " ", $firstStringToUpper, " ", $secondStringToLower, " ", 
$secondStringToUpper;

