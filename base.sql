CREATE DATABASE articles;
USE articles;
CREATE TABLE article(id INTEGER PRIMARY KEY AUTO_INCREMENT,content varchar(1024),img varchar(512), titre varchar(128));
INSERT INTO article(titre,content,img) VALUES ('Consequat cupidatat esse','Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae non a tempore ipsa expedita incidunt dolores est blanditiis minus in nemo, recusandae ullam sapiente rerum, odio quibusdam, ab maxime voluptatem!','img/bob.gif');
 