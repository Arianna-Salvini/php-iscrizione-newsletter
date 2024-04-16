# Descrizione
Esercizio di oggi: PHP iscrizione newsletter

1. Controllare ch el'email passata in GET sia ben formattata e contenga '.' e '@'

2. Se è corretta stampare un messaggio di success in un alert di Bootstrap, latrimenti (sempre in n alert di Bootstrap) mostrare un messaggio di errore.


## Milestone 1: 
- scriviamo tutto (logica e layout) in un unico file index.php


## Milestone 2: 
- verificato il corretto funzionamento del nostro codice, 
- spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

- Aggiungere anche un po’ di stile alla pagina tramite Bootstrap.

# Bonus

## Milestone 3: 

invece di usare una classe statica per lo stile dell’alert, modificarla in base all’esito della funzione. Usare alert-danger in caso di errore e alert-success in caso di esito positivo.

## Milestone 4: 

invece di visualizzare il messaggio di success nella index.php, in caso di esito positivo effettuare un redirect ad una thankyou page.

## Milestone 5: 

sullo stesso stile del metodo old() di Laravel, far vedere come utilizzare $_GET per valorizzare il campo di input in caso il controllo del server dia esito negativo (KO)

<!-- old() è una funziona che salva il valore e in caso in cui l'invio della form non va a buon fine si usa per mostrare di nuovo quel valore nel input cosi non è perso quello che l'utente ha inserito nel campo (e non lo facciamo arrabbiare ma solo correggere il dato e riinviare)
Ora nel nostro caso il tutto avviene nella stesso file, quindi utilizzando una variabile siete in grado di farlo. -->