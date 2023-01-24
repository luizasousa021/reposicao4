create databese reposicao3;

use reposicao3;

create teble artigo(
    idartigo int primary key auto_increment,
    titulo varchar(30),
    auto varchar(40),
    artigo text,
    foto varchar(30) not null
);

