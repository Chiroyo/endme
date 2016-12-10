CREATE TABLE logging(
AttemptedUserID varchar(12) PRIMARY KEY,
logdate date,
logtime time,
HTTP_HOST varchar(60),
HTTP_USER_AGENT varchar (60),
REMOTE_ADDR varchar(45)
AttemptSuccess bit
);

CREATE TABLE category(
CategoryID int(5) PRIMARY KEY,
Name varchar(20),
Description varchar(100)
);

CREATE TABLE image(
ImageID int(5) PRIMARY KEY,
CategoryID int(5) REFERENCES category(CategoryID),
Filename varchar(20)
);

CREATE TABLE usertype{
TypeID varchar(8) PRIMARY KEY
};

CREATE TABLE user(
UserID int(5) PRIMARY KEY,
TypeID varchar(8) REFERENCES usertype(TypeID)
Password varchar(60)
);

CREATE TABLE usercategory(
userID int(5) REFERENCES user(UserID),
CategoryID int(5) REFERENCES category(CategoryID)
);
