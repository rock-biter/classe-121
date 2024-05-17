## Select

1. Selezionare tutti gli studenti nati nel 1990 (160)

```sql
SELECT *
FROM `students`
WHERE YEAR(`date_of_birth`) = 1990
```

2. Selezionare tutti i corsi che valgono più di 10 crediti (479)

```sql
SELECT *
FROM `courses`
WHERE `cfu` > 10
```

3. Selezionare tutti gli studenti che hanno più di 30 anni

```sql
SELECT *
FROM `students`
WHERE TIMESTAMPDIFF(YEAR, `date_of_birth`, CURDATE()) > 30
```

4. Selezionare tutti i corsi del primo semestre del primo anno di un qualsiasi corso di
   laurea (286)

```sql
SELECT *
FROM `courses`
WHERE `period` = 'I semestre'
AND `year` = 1
```

5. Selezionare tutti gli appelli d'esame che avvengono nel pomeriggio (dopo le 14) del
   20/06/2020 (21)

```sql
SELECT *
FROM `exams`
WHERE `date` = '2020-06-20'
AND HOUR(`hour`) >= 14
```

6. Selezionare tutti i corsi di laurea magistrale (38)

```sql
SELECT *
FROM `degrees`
WHERE `level` = 'magistrale'
```

7. Da quanti dipartimenti è composta l'università? (12)

```sql
SELECT COUNT(*) AS `numero_dipartimenti`
FROM `departments`
```

8. Quanti sono gli insegnanti che non hanno un numero di telefono? (50)

```sql
SELECT COUNT(*) AS `numero_insegnanti`
FROM `teachers`
WHERE `phone` IS NULL
```

## Group By

1. Contare quanti iscritti ci sono stati ogni anno

```sql
SELECT COUNT(*) AS `numero_iscritti`, YEAR(`enrolment_date`) AS `anno`
FROM `students`
GROUP BY `anno`
```

2. Contare gli insegnanti che hanno l'ufficio nello stesso edificio

```sql
SELECT COUNT(*) AS `numero_insegnanti`, `office_address`
FROM `teachers`
GROUP BY `office_address`
```

3. Calcolare la media dei voti di ogni appello d'esame

```sql
SELECT AVG(`vote`), `exam_id`
FROM `exam_student`
GROUP BY `exam_id`
```

4. Contare quanti corsi di laurea ci sono per ogni dipartimento

```sql
SELECT count(*) AS `numero_corsi_laurea`, `department_id`
FROM `degrees`
GROUP BY `department_id
```

## JOIN

1. Selezionare tutti gli studenti iscritti al Corso di Laurea in Economia

```sql
SELECT `students`.`name`, `students`.`surname`,
`students`.`date_of_birth`, `students`.`fiscal_code`,
`students`.`enrolment_date`, `students`.`registration_number`,
`students`.`email` FROM `students` JOIN `degrees` ON
`students`.`degree_id` = `degrees`.`id` WHERE `degrees`.`name`
= 'Corso di Laurea in Economia'
```

2. Selezionare tutti i Corsi di Laurea Magistrale del Dipartimento di
   Neuroscienze

```sql
SELECT `degrees`.* FROM `degrees` JOIN `departments` ON
`degrees`.`department_id` = `departments`.`id` WHERE
`departments`.`name` = 'Dipartimento di Neuroscienze' AND
`degrees`.`level` = 'magistrale'
```

3. Selezionare tutti i corsi in cui insegna Fulvio Amato (id=44)

```sql
SELECT `courses`.* FROM `courses` JOIN `course_teacher` ON
`courses`.`id` = `course_teacher`.`course_id` JOIN `teachers`
ON `course_teacher`.`teacher_id` = `teachers`.`id` WHERE
`teachers`.`name` = 'Fulvio' AND `teachers`.`surname` =
'Amato'
```

4. Selezionare tutti gli studenti con i dati relativi al corso di laurea a cui
   sono iscritti e il relativo dipartimento, in ordine alfabetico per cognome e
   nome

```sql
SELECT `students`.`surname`, `students`.`name`,
`students`.`registration_number`, `degrees`.`name`,
`departments`.`name` FROM `students` JOIN `degrees` ON
`students`.`degree_id` = `degrees`.`id` JOIN `departments` ON
`degrees`.`department_id` = `departments`.`id` ORDER BY
`students`.`surname`, `students`.`name`
```

5. Selezionare tutti i corsi di laurea con i relativi corsi e insegnanti

```sql
SELECT `degrees`.`name`, `courses`.`name`, `courses`.`period`,
`courses`.`year`, `courses`.`cfu`, `teachers`.`name`,
`teachers`.`surname` FROM `degrees` JOIN `courses` ON
`degrees`.`id` = `courses`.`degree_id` JOIN `course_teacher`
ON `courses`.`id` = `course_teacher`.`course_id` JOIN
`teachers` ON `course_teacher`.`teacher_id` = `teachers`.`id`
```

6. Selezionare tutti i docenti che insegnano nel Dipartimento di
   Matematica (54)

```sql
SELECT DISTINCT `teachers`.`name`, `teachers`.`surname`,
`teachers`.`phone`, `teachers`.`email`,
`teachers`.`office_address`, `teachers`.`office_number` FROM
`teachers` JOIN `course_teacher` ON `teachers`.`id` =
`course_teacher`.`teacher_id` JOIN `courses` ON
`course_teacher`.`course_id` = `courses`.`id` JOIN `degrees`
ON `courses`.`degree_id` = `degrees`.`id` JOIN `departments`
ON `degrees`.`department_id` = `departments`.`id` WHERE
`departments`.`name` = 'Dipartimento di Matematica'
```

7. BONUS: Selezionare per ogni studente il numero di tentativi sostenuti
   per ogni esame, stampando anche il voto massimo. Successivamente,
   filtrare i tentativi con voto minimo 18.

```sql
SELECT `students`.`id`, `students`.`name`,
`students`.`surname`, `courses`.`name`,
COUNT(`exam_student`.`vote`) AS `numero_tentativi`,
MAX(`exam_student`.`vote`) AS `voto_massimo` FROM `students`
JOIN `exam_student` ON `students`.`id` =
`exam_student`.`student_id` JOIN `exams` ON
`exam_student`.`exam_id` = `exams`.`id` JOIN `courses` ON
`exams`.`course_id` = `courses`.`id` GROUP BY `students`.`id`,
`courses`.`id` HAVING `voto_massimo` >= 18
```
