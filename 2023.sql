1 ユーザー情報
CREATE TABLE users
(user_id  INT AUTO_INCREMENT   NOT NULL,
 user_mail 	VARCHAR(100)   NOT NULL,
 user_name     VARCHAR(50)    NOT NULL,
 user_niku   VARCHAR(50)    NOT NULL,
 user_pass    VARCHAR(30)    NOT NULL,
 user_address VARCHAR(100)   NOT NULL,
 user_number VARCHAR(20)    NOT NULL,
 PRIMARY KEY(user_id)
);

2 スレッド情報
CREATE TABLE threads
(threads_id   INT AUTO_INCREMENT NOT NULL,
 threads_title VARCHAR(50)  NOT NULL,
 user_id  INT(11) NOT NULL,
 threads_date   DATE 	       NOT NULL,
 PRIMARY KEY(threads_id),
 FOREIGN KEY(user_id)REFERENCES users(user_id)
);



3 コメント情報
CREATE TABLE comments
(comments_id 	  INT AUTO_INCREMENT NOT NULL,
 threads_id 	  INT(11) NOT NULL,
 user_id	  INT(11)	 NOT NULL,
 post_date	  DATE		 NOT NULL,
 PRIMARY KEY(comments_id),
 FOREIGN KEY(threads_id)REFERENCES threads(threads_id),
 FOREIGN KEY(user_id)REFERENCES users(user_id)
);



4 投稿履歴
CREATE TABLE Post_historys
(user_id INT(11) NOT NULL,
 history_id INT AUTO_INCREMENT NOT NULL,
 PRIMARY KEY(history_id),
 FOREIGN KEY(user_id) REFERENCES users(user_id)
);
