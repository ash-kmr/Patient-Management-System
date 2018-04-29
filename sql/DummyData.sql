insert into Doctor(doctor_id,first_name,last_name) values (1,'Dr. Mukesh','Saini');
insert into Doctor(doctor_id,first_name,last_name) values (2,'Dr. Rahul','Lahane');
insert into Doctor(doctor_id,first_name,last_name) values (3,'Dr. Ashish','Kumar');
insert into Doctor(doctor_id,first_name,last_name) values (4,'Dr. Ramesh','Kumar');
insert into Doctor(doctor_id,first_name,last_name) values (5,'Dr. Sid','Nahar');

-- -------------------------------------------------------------------------------------

insert into Doctor_department(dp_id,doctor_id,dept_name,image_url) values (1,1,'Gynacologist','./Images/Departments/Gyan.png');
insert into Doctor_department(dp_id,doctor_id,dept_name,image_url) values (2,1,'Cardiology','./Images/Departments/Cadiac.png');
insert into Doctor_department(dp_id,doctor_id,dept_name,image_url) values (3,2,'Neurology','./Images/Departments/Neural.png');
insert into Doctor_department(dp_id,doctor_id,dept_name,image_url) values (4,2,'Eye Specialist','./Images/Departments/eye.png');
insert into Doctor_department(dp_id,doctor_id,dept_name,image_url) values (5,3,'Dummy1','./Images/Departments/eye.png');
insert into Doctor_department(dp_id,doctor_id,dept_name,image) values (6,4,'Dummy2','./Images/Departments/Cadiac.png');
insert into Doctor_department(dp_id,doctor_id,dept_name) values (7,5,'Dummy2','./Images/Departments/Neural.png');
