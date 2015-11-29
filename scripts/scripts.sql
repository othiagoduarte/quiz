insert into jogos_resposta (id_pergunta, id_jogo) 

(SELECT p.id 
		,(select j.id from jogos j where j.id_usuario = 1) AS id_jogo

   FROM perguntas p
 inner join nivel n on n.id = p.id_nivel
				  and n.descricao = 'Facil'
order by rand()
limit 4
)
union 
(SELECT p.id 
		,(select j.id from jogos j where j.id_usuario = 1) AS id_jogo

  FROM perguntas p
inner join nivel n on n.id = p.id_nivel
				  and n.descricao = 'Médio'
order by rand()
limit 3)
union 
(SELECT p.id 
	,(select j.id from jogos j where j.id_usuario = 1) AS id_jogo

 FROM perguntas p
inner join nivel n on n.id = p.id_nivel
				  and n.descricao = 'Dificil'
order by rand()
 limit 3)