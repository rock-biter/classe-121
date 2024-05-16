## Query SELECT

1. Selezionare tutti gli insegnanti

```sql
   SELECT \*
   FROM `teachers`
```

2. Selezionare tutti i referenti per ogni dipartimento

```sql
   SELECT `head_of_department`, `name`
   FROM `departments`
```

3. Selezionare tutti gli studenti il cui nome inizia per "E" (373)

```sql
   SELECT \*
   FROM `students`
   WHERE `name` LIKE 'E%'
```

4. Selezionare tutti gli studenti che si sono iscritti nel 2021 (734)

```sql
   SELECT _
   FROM `students`
   WHERE YEAR(`enrolment_date`) = 2021
   oppure
   SELECT _
   FROM `students`
   WHERE `enrolment_date` BETWEEN '2021-01-01' AND '2021-12-31'
   oppure
   SELECT \*
   FROM `students`
   WHERE `enrolment_date` LIKE '2021-%'
```

5. Selezionare tutti i corsi che non hanno un sito web (676)

```sql
   SELECT \*
   FROM `courses`
   WHERE `website` IS NULL
```

6. Selezionare tutti gli insegnanti che hanno un numero di telefono (50)

```sql
   SELECT \*
   FROM `teachers`
   WHERE `phone` IS NOT NULL
```

7. Selezionare tutti gli appelli d'esame dei mesi di giugno e luglio 2020 (2634)

```sql
   SELECT \*
   FROM `exams`
   WHERE `date` BETWEEN '2020-06-01' AND '2020-07-31'
```

8. Qual è il numero totale degli studenti iscritti? (5000)

```sql
   SELECT COUNT(\*) AS `totale_icritti`
   FROM `students`
```

## Query GROUP BY

1. Contare i corsi raggruppati per cfu

```sql
SELECT COUNT(*) AS `numero_corsi`, `cfu`
FROM `courses`
GROUP BY `cfu`
```

2. Contare gli studenti raggruppati per anno di nascita

```sql
SELECT COUNT(*) AS `numero_studenti`, YEAR(`date_of_birth`) AS
`anno_nascita`
FROM `students`
GROUP BY `anno_nascita`
```

3. Selezionare il voto più basso dato ad ogni appello d'esame

```sql
SELECT MIN(vote) as `voto_peggiore`, `exam_id`
FROM `exam_student`
GROUP BY `exam_id`
```

4. Contare gli appelli d'esame del mese di luglio raggruppati per giorno

```sql
SELECT COUNT(*) AS `numero_appelli`, DAY(`date`) AS `giorno`
FROM `exams`
WHERE MONTH(`date`) = 7
GROUP BY DAY(`date`)
```

## Query JOIN

1. Selezionare tutti i corsi del Corso di Laurea in Informatica (22)

```sql
   SELECT `courses`.`id`, `courses`.`name`, `courses`.`period`,
   `courses`.`year`, `courses`.`cfu`, `courses`.`website`
   FROM `courses`
   JOIN `degrees` ON `courses`.`degree_id` = `degrees`.`id`
   WHERE `degrees`.`name` = 'Corso di Laurea in Informatica'
```

2. Selezionare le informazioni sul corso con id = 144, con tutti i relativi appelli
   d’esame

```sql
   SELECT `courses`.`id` AS `course_id`, `courses`.`name`,
   `courses`.`description`, `courses`.`period`, `courses`.`year`,
   `courses`.`cfu`, `courses`.`website`, `exams`.`id` AS `exam_id`,
   `exams`.`date`, `exams`.`hour`, `exams`.`location`, `exams`.`address`
   FROM `courses`
   JOIN `exams` ON `courses`.`id` = `exams`.`course_id`
   WHERE `courses`.`id` = 144
```

3. Selezionare a quale dipartimento appartiene il Corso di Laurea in Diritto
   dell'Economia (Dipartimento di Scienze politiche, giuridiche e studi internazionali)

```sql
   SELECT `departments`.\*
   FROM `departments`
   JOIN `degrees` ON `departments`.`id` = `degrees`.`department_id`
   WHERE `degrees`.`name` = 'Corso di Laurea in Diritto dell\'Economia'
```

4. Selezionare tutti gli appelli d'esame del Corso di Laurea Magistrale in Fisica del
   primo anno

```sql
   SELECT `courses`.`name`, `courses`.`period`, `courses`.`cfu`,
   `exams`.`date`, `exams`.`hour`, `exams`.`location`, `exams`.`address`
   FROM `degrees`
   JOIN `courses` ON `degrees`.`id` = `courses`.`degree_id`
   JOIN `exams` ON `courses`.`id` = `exams`.`course_id`
   WHERE `degrees`.`name` = 'Corso di Laurea Magistrale in Fisica'
   AND `courses`.`year` = 1
```

5. Selezionare tutti i docenti che insegnano nel Corso di Laurea in Lettere (21)

```sql
   SELECT DISTINCT `teachers`.`name`, `teachers`.`surname`,
   `teachers`.`phone`, `teachers`.`email`, `teachers`.`office_address`,
   `teachers`.`office_number`
   FROM `teachers`
   JOIN `course_teacher` ON `teachers`.`id` = `course_teacher`.`teacher_id`
   JOIN `courses` ON `course_teacher`.`course_id` = `courses`.`id`
   JOIN `degrees` ON `courses`.`degree_id` = `degrees`.`id`
   WHERE `degrees`.`name` = 'Corso di Laurea in Lettere'
```

6. Selezionare il libretto universitario di Mirco Messina (matricola n. 620320)

```sql
   SELECT `students`.`name`, `students`.`surname`,
   `students`.`registration_number`, `courses`.`id`, `courses`.`name`,
   `exams`.`date`, `exam_student`.`vote`
   FROM `exam_student`
   JOIN `students` ON `exam_student`.`student_id` = `students`.`id`
   JOIN `exams` ON `exam_student`.`exam_id` = `exams`.`id`
   JOIN `courses` ON `exams`.`course_id` = `courses`.`id`
   WHERE `students`.`name` = 'Mirco'
   AND `students`.`surname` = 'Messina'
   AND `exam_student`.`vote` >= 18
```

7. Selezionare il voto medio di superamento d'esame per ogni corso, con anche i dati
   del corso di laurea associato, ordinati per media voto decrescente

```sql
   SELECT AVG(`exam_student`.`vote`) AS `media_voto`, `courses`.`name`,
   `degrees`.`name`
   FROM `exam_student`
   JOIN `exams` ON `exam_student`.`exam_id` = `exams`.`id`
   JOIN `courses` ON `exams`.`course_id` = `courses`.`id`
   JOIN `degrees` ON `courses`.`degree_id` = `degrees`.`id`
   WHERE `exam_student`.`vote` >= 18
   GROUP BY `courses`.`id`
   ORDER BY `media_voto` DESC
```
