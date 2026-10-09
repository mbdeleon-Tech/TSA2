-- TSA2 database export: Tasks for Today full CRUD and authentication
DROP TABLE IF EXISTS tasks;
DROP TABLE IF EXISTS users;
CREATE TABLE tasks (id INT AUTO_INCREMENT PRIMARY KEY,title VARCHAR(150) NOT NULL,status VARCHAR(20) NOT NULL DEFAULT 'pending',task_date DATE NOT NULL,created_at DATETIME NOT NULL,is_archived TINYINT(1) NOT NULL DEFAULT 0);
CREATE TABLE users (id INT AUTO_INCREMENT PRIMARY KEY,username VARCHAR(50) NOT NULL UNIQUE,full_name VARCHAR(100) NOT NULL,email VARCHAR(100) NOT NULL,password VARCHAR(255) NOT NULL,created_at DATETIME NOT NULL);
INSERT INTO tasks (title,status,task_date,created_at,is_archived) VALUES
('Update the internal contact sheet','done','2026-10-07','2026-10-06 14:00:00',0),('Archive last week’s completed requests','pending','2026-10-08','2026-10-07 09:00:00',0),('Check the shared equipment log','done','2026-10-08','2026-10-07 09:30:00',0),('Review the morning support queue','done','2026-10-09','2026-10-08 08:00:00',0),('Prepare the team stand-up notes','in_progress','2026-10-09','2026-10-08 08:15:00',0),('Send the daily progress update','pending','2026-10-09','2026-10-08 08:30:00',0),('Plan next week’s maintenance window','pending','2026-10-10','2026-10-08 10:00:00',0),('Confirm the Monday briefing room','pending','2026-10-10','2026-10-08 10:15:00',0);
INSERT INTO users (username,full_name,email,password,created_at) VALUES ('marco.deleon','Marco Arsenio B. De Leon','marco.deleon@example.com','$2y$10$ViIdqAFPcoyvDX.oJaDraOIfozkI8QYEQ85KUVK9GdK37WKWoycUu','2026-10-01 08:00:00');
