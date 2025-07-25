CREATE TABLE `users`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fumll_name` LINESTRING NOT NULL,
    `username` LINESTRING NOT NULL,
    `email` LINESTRING NOT NULL,
    `password` LINESTRING NOT NULL,
    `date_of_birth, phone` LINESTRING NOT NULL,
    `phone` LINESTRING NOT NULL,
    `bacalaureate` TEXT NOT NULL,
    `email_verified` BIGINT NOT NULL,
    `status` LINESTRING NOT NULL
);
CREATE TABLE `students`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `registred_date` DATE NOT NULL,
    `class_id` BIGINT NOT NULL,
    `abssence_reason` LINESTRING NOT NULL,
    `user_id` BIGINT NOT NULL
);
CREATE TABLE `teachers`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `fullname` LINESTRING NOT NULL,
    `specialty` LINESTRING NOT NULL,
    `phone` LINESTRING NOT NULL,
    `email` LINESTRING NOT NULL,
    `email_verified` BIGINT NOT NULL,
    `password` LINESTRING NOT NULL,
    `students_id` BIGINT NOT NULL
);
CREATE TABLE `classes`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `class_name` LINESTRING NOT NULL,
    `student_id` BIGINT NOT NULL
);
CREATE TABLE `AcademicCycles`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `start_date` DATE NOT NULL,
    `end_date` DATE NOT NULL
);
CREATE TABLE `courses`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` LINESTRING NOT NULL,
    `description` TEXT NOT NULL,
    `category` LINESTRING NOT NULL,
    `premium` BOOLEAN NOT NULL
);
CREATE TABLE `ClassCourseAssignments`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `class_id` BIGINT NOT NULL,
    `course_id` BIGINT NOT NULL,
    `teacher_id` BIGINT NOT NULL
);
CREATE TABLE `Enrollments`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `enroll_date`.`` DATE NOT NULL,
    `class_course_assignment_id` BIGINT NOT NULL
);
CREATE TABLE `Schedules`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `class_course_assignment_id` BIGINT NOT NULL,
    `date` DATE NOT NULL,
    `start_time` DATE NOT NULL,
    `end_time` DATE NOT NULL
);
CREATE TABLE `Exams`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `class_course_assignment_id` BIGINT NOT NULL,
    `exam_type (QCM / ouvert)` LINESTRING NOT NULL,
    `date` DATE NOT NULL,
    `due_date` DATE NOT NULL
);
CREATE TABLE `ExamQuestion`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `exam_id` BIGINT NOT NULL,
    `prompt` LINESTRING NOT NULL,
    `chaices` LINESTRING NOT NULL
);
CREATE TABLE `ExamStudentSubmittion`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `exam_id` BIGINT NOT NULL,
    `student_id` BIGINT NOT NULL,
    `submitted_at` DATE NOT NULL,
    `score` BIGINT NOT NULL
);
CREATE TABLE `GradeStatus`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `submission_id` BIGINT NOT NULL,
    `status` LINESTRING NOT NULL
);
CREATE TABLE `Payment`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `student_id` BIGINT NOT NULL,
    `amount` BIGINT NOT NULL,
    `paid_at` DATE NOT NULL,
    `receipt_pdf_path` LINESTRING NOT NULL
);
CREATE TABLE `ExamAnswer`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `exam_question_id` LINESTRING NOT NULL,
    `answer_option` BOOLEAN NOT NULL
);
ALTER TABLE
    `ClassCourseAssignments` ADD CONSTRAINT `classcourseassignments_teacher_id_foreign` FOREIGN KEY(`teacher_id`) REFERENCES `teachers`(`id`);
ALTER TABLE
    `ExamQuestion` ADD CONSTRAINT `examquestion_exam_id_foreign` FOREIGN KEY(`exam_id`) REFERENCES `Exams`(`id`);
ALTER TABLE
    `teachers` ADD CONSTRAINT `teachers_students_id_foreign` FOREIGN KEY(`students_id`) REFERENCES `students`(`id`);
ALTER TABLE
    `classes` ADD CONSTRAINT `classes_student_id_foreign` FOREIGN KEY(`student_id`) REFERENCES `students`(`id`);
ALTER TABLE
    `GradeStatus` ADD CONSTRAINT `gradestatus_submission_id_foreign` FOREIGN KEY(`submission_id`) REFERENCES `ExamStudentSubmittion`(`id`);
ALTER TABLE
    `Exams` ADD CONSTRAINT `exams_class_course_assignment_id_foreign` FOREIGN KEY(`class_course_assignment_id`) REFERENCES `ClassCourseAssignments`(`id`);
ALTER TABLE
    `ExamStudentSubmittion` ADD CONSTRAINT `examstudentsubmittion_student_id_foreign` FOREIGN KEY(`student_id`) REFERENCES `students`(`id`);
ALTER TABLE
    `Schedules` ADD CONSTRAINT `schedules_class_course_assignment_id_foreign` FOREIGN KEY(`class_course_assignment_id`) REFERENCES `ClassCourseAssignments`(`id`);
ALTER TABLE
    `Enrollments` ADD CONSTRAINT `enrollments_class_course_assignment_id_foreign` FOREIGN KEY(`class_course_assignment_id`) REFERENCES `ClassCourseAssignments`(`id`);
ALTER TABLE
    `ClassCourseAssignments` ADD CONSTRAINT `classcourseassignments_class_id_foreign` FOREIGN KEY(`class_id`) REFERENCES `classes`(`id`);
ALTER TABLE
    `ExamAnswer` ADD CONSTRAINT `examanswer_exam_question_id_foreign` FOREIGN KEY(`exam_question_id`) REFERENCES `ExamQuestion`(`id`);
ALTER TABLE
    `ExamStudentSubmittion` ADD CONSTRAINT `examstudentsubmittion_exam_id_foreign` FOREIGN KEY(`exam_id`) REFERENCES `Exams`(`id`);
ALTER TABLE
    `ClassCourseAssignments` ADD CONSTRAINT `classcourseassignments_course_id_foreign` FOREIGN KEY(`course_id`) REFERENCES `courses`(`id`);
ALTER TABLE
    `students` ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `users`(`id`);
ALTER TABLE
    `Payment` ADD CONSTRAINT `payment_student_id_foreign` FOREIGN KEY(`student_id`) REFERENCES `students`(`id`);