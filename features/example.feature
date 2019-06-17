# language: pt
Funcionalidade: Entrar na tela inicial da aplicação e tentar fazer login

Cenario: Ir na tela inicial da aplicação
  Quando eu estou na homepage
  Entao Eu deveria ver "Djair"

Cenario: Soma de dois numeros
  Dado que eu tenho numero 3 e numero 3
  Entao eu deveria receber 5

#Cenario: O painel está bloqueado para convidados
#  Quando eu vou para "homepage"
#  Entao a url deve corresponder "homepage/login"