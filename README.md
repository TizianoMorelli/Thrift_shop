bella raga

# DATABASE 

Lo dobbiamo immaginare come una collezione con delle strutture specifiche per mantenere dei dati.

*2 tipologie di database*

- RELAZIONARI (SQL) -> strutture righe e colonne:
    - sqlite, MySQL, OracleDB, PostgreSQL, Aurora(AWS)

- NON RELAZIONARI (NoSQL -> NOT ONLY SQL) -> struttura basata su documenti mutevoli (JSON)
    - MongoDB, Firebase, DynamoDB(AWS)

<!------------------------------------------->

- MySQL => RDBMS (Relational DataBase Management System):
    - gestori di database quindi dei software che ci permettono di creare e modificare i database.

Le tabelle sono le strutture organizzate in righe e colonne per definire i nostri dati:

    1. Righe => Record
        Il record definisce le informazioni complete di una detarminata entità(o oggetto)

    2. Colonne => Field (campi)
        Definiscono una singola informazione di una determinata entità.

    3. ID => Intendiamo un identificatore univoco che permette di catturare una specifica entità. Definito con un numero intero senza segno e auto-incrementale.

<!------------------------------------------------>


- SQL (Structured Query Language)
    - Scivere query SQL attraverso PHP
    - Laravel ha un servizio che permette di tradurre linguaggio PHP in query SQL:

        *ELOQUENT* => ORM(Object Relational Mapper)

        Intermediario tra la nostra applicazione Laravel e il DataBase.

# COMANDI

- winpty mysql -u root -p (winpty solo windows) [per accedere al servizio di MySQL]

- show databases; [per vedere i DB nel nostro RDBMS]

- create database laraveldb; [creare un nuovo DB]

- use laraveldb [accedere all'interno del DB]

da questo momento ci sposteremo su laravel.


<!------------------------------------------------>

*TablePlus*

GUI -> Graphic User Interface 
Interfaccia per poter visualizzare più comodamente i dati dei nostri database.



<!------------------------------------------------>

# STORAGE

- intendiamo la memoria adibita a contenere i media del nostro progetto (es. img),
  dobbiamo inserire l'attributo entype= ""

- Locale o Esterno:

    - locale -> il framework può contenere dei file in locale nella cartella 'storage'.

    - esterna -> viene utilizzata quando si utilizzano servizi esterni, per esempio quando un utente carica un file. (un servizio famoso esterno è S3 di AWS).

Noi utilizzeremo quello LOCALE

Noi creremo una nuova colonna nel database in cui andremo ad indicare il percorso in cui metteremo il percorso dell'immagine.



*STEPS*

    (STRUTTURA DATABASE)
1. creo una migrazione ( php artisan make:migration):

    - se devo aggiungere una colonna invece (php artisan make:migration add_img_column_to_products_table) -> products_table è il nome della nostra tabella;
    in generale sarebbe : "php artisan make:migration add_img_column_to_nometabella"

    es. $table->string('img')
        ->nullable() <!--la colonna accetta come valore valido NULL-->
         ->after('description'); <!--ordine di posizionamento colonna -->

    
    - $table->dropcolumn('img'); <!-- metedo per eliminare una singola colonna -->


2. creo logica nel controller per salvare i dati presi dal form;

3.  nel modello , nell'array $fillable , metto tutte le informazioni che devo salvare nel database;


- php artisan storage:link
    questo comando crea un link simbolico di storage all'interno della cartella public

- :product="$product" 
    Utilizzo questa sintassi per passare nel componente tutto il riferimento dell'oggetto product senza separare le vari informazioni in singole proprietà

- Storage::url() => metodo che ricostruisce i path dell'immagine a partire dal valore che abbaimo nel database


*Validation*
- Crea una nuova request che può essere customizzata
    - php artisan make:request ProductRequest



 <!--! Display Errors -->

    https://laravel.com/docs/11.x/validation#quick-displaying-the-validation-errors

<!--! List Validation Errors -->

    https://laravel.com/docs/11.x/validation#available-validation-rules




# FORTIFY

- E' un pacchetto (libreria) first party di Laravel che serve a gestire l'autenticazione.
    Per autenticazione intediamo un sistema di accesso e registrazione al nostro sito.

*installazione* => seguiamo passo passo la documentazione ('https://laravel.com/docs/11.x/fortify#main-content').

1. composer require laravel/fortify => (installazione dipendenze PHP);

2. php artisan fortify:install => (Abbiamo reso disponibili al nostro progetto dei file di configurazione e delle logiche di Fortify per poter effettuare delle modifiche al comportamento di base di Fortify)

3.  php artisan migrate => (per lanciare la nuova migrazione che il comando precedente ci ha pubblicato)



*registrazione*

1. andiamo a definire nel FortifyServiceProvider la logica per poter visualizzare il form di registrazione.
2. copiamo la logica di questo link: ('https://laravel.com/docs/11.x/fortify#registration')
3. creiamo la cartella 'auth' con dentro il file 'register.blade.php'
4. utilizziamo il comando php artisan route:list per recuperare le rotte di Fortify.

*Logout*

1. utilizziamo la rotta POST fornita da Fortify per creare un form che ci permette di staccare la sessione dell'utente registrato.
2. andiamo adefinire nel FortifyServiceProvider la logica per poter visualizzare il form di accesso.
3. copiamo la logica.
4. creiamo la cartella 'auth' con dentro il file 'login.blade.php'.
5. utilizziamo il comando php artisan route:list per recuperare le rotte di Fortify.


# Middleware

- I Middleware sono delle logiche che io scelgo di interporre a determinate richieste.
    - 'auth' è l'alias del Middleware che controlla se l'utente è utenticato





# CRUD

C = create 
R = read
U = update
D = delete

- 4 operazioni di base che si possono effettuare in un DB 

- php artisan make:model NomeModello -mcr 

## UPDATE

- creare un form precompilato con i dati dell'articolo che vogliamo modificare 
- 



*RELAZIONI*

- relazione One to One/ 1-1 -> <!-- un record è collegato ad una ed una sola entità in un'altra tabella -->
- relazione One to Many/ 1-N -> <!-- un record può essere collegato a più entità di un'altra tabella -->
- relazione Many to Many/ N-N -> <!-- più record di una tabella possono essere collegati a più record di un'altra tabella -->

# One to Many

- Aggiungere la FK (Foreign Key) all'interno della tabella child della relazione One to Many
    - La tabella child è quella che definisce la parte "Many" della relazione

1. `php artisan make:migration add_user_id_column_to_product_table`
2. `$table->unsignedBigInteger('user_id')->nullable()`
3. `$table->foreign('user_id')->references('id')->on('users')` <!--? VINCOLO REFERENZIALE-->
4. `$table->dropForeign(['user_id'])`  <!--? ROMPENDO VINCOLO REFERENZIALE-->
5. `$table->dropColumn('user_id')`
6. Lancio la migrazione


Nella migrazione creo la colonna
poi rendo quella colonna una FK

Istruire i nostri Modelli relazionati che posso intereagire tra di loro



# Many to Many (N-N)

- Ci creiamo 2 modelli da mettere in relazione N-N;
- Creare la migrazione per i modelli;
- Creare la migrazione per la cartella PIVOT:
    - `php artisan make:migration create_article_tag_table` -> i nomi dei modelli al singolare minuscolo in ordine alfabetico;
- Inserisco nella migrazione le due Foreign Key;
- Istruire i modelli alla relazione Many to Many;


# LIVEWIRE

Framework per creare delle UI reattive rimanendo nel linguaggio PHP.

link documentazione -> `https://livewire.laravel.com/`

Installazione:
    - `composer require livewire/livewire`

Creazione componente:
    - `php artisan make:livewire counter`

Tag per richiamare un componente:
    - <livewire:counter/>




    Prova modifica




    Palette colori

    

    /* CSS HEX */
--oxford-blue: #102542ff;
--glaucous: #6184d8ff;
--verdigris: #50c5b7ff;

/* CSS HSL */
--oxford-blue: hsla(215, 61%, 16%, 1);
--glaucous: hsla(222, 60%, 61%, 1);
--verdigris: hsla(173, 50%, 54%, 1);

/* SCSS HEX */
$oxford-blue: #102542ff;
$glaucous: #6184d8ff;
$verdigris: #50c5b7ff;

/* SCSS HSL */
$oxford-blue: hsla(215, 61%, 16%, 1);
$glaucous: hsla(222, 60%, 61%, 1);
$verdigris: hsla(173, 50%, 54%, 1);

/* SCSS RGB */
$oxford-blue: rgba(16, 37, 66, 1);
$glaucous: rgba(97, 132, 216, 1);
$verdigris: rgba(80, 197, 183, 1);

/* SCSS Gradient */
$gradient-top: linear-gradient(0deg, #102542ff, #6184d8ff, #50c5b7ff);
$gradient-right: linear-gradient(90deg, #102542ff, #6184d8ff, #50c5b7ff);
$gradient-bottom: linear-gradient(180deg, #102542ff, #6184d8ff, #50c5b7ff);
$gradient-left: linear-gradient(270deg, #102542ff, #6184d8ff, #50c5b7ff);
$gradient-top-right: linear-gradient(45deg, #102542ff, #6184d8ff, #50c5b7ff);
$gradient-bottom-right: linear-gradient(135deg, #102542ff, #6184d8ff, #50c5b7ff);
$gradient-top-left: linear-gradient(225deg, #102542ff, #6184d8ff, #50c5b7ff);
$gradient-bottom-left: linear-gradient(315deg, #102542ff, #6184d8ff, #50c5b7ff);
$gradient-radial: radial-gradient(#102542ff, #6184d8ff, #50c5b7ff);