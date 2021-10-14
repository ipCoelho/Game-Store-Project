create table game (
	idgame INT not null auto_increment primary key,
	game_name varchar(100) not null,
	studio_developer varchar(100) not null,
    price float(20) not null,
	release_date varchar(100) not null,
    discount float,
    highlight boolean,    
    description text
);
    
    