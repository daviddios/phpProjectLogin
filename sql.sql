CREATE TABLE app_user (
    username varchar(50) PRIMARY KEY,
    mail varchar(100),
    userpass varchar(255),
    /*255 is recommended by php doc*/
    userrol varchar(50)
);
CREATE TABLE dashboard (
    ID int NOT NULL PRIMARY KEY,
    username varchar(50),
    spotify boolean,
    newspaper boolean, 
    CONSTRAINT FK_userDash FOREIGN KEY (username)
    REFERENCES app_user(username)

);
