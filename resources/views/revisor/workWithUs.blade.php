<x-layout>
    <div class="container-fluid h-100 mt-3">
        <div class="row mx-auto h-50">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center mb-5">
                <img class="my-5" src="{{ Storage::url('public/logo/logo.png') }}" alt="">
                <h1 class="text-center">Vuoi far parte del nostro team?</h1>
                <x-display-message />

            </div>
            <div class="row d-flex justify-content-around ">
                <div class="col-12 col-md-6 col-lg-4 px-3">
                    <p class="fs-5">
                        Hai un occhio attento ai dettagli e ami leggere? Siamo alla ricerca di revisori per la nostra
                        piattaforma di annunci online. Come revisore, il tuo compito sarà esaminare gli annunci inviati
                        per
                        la pubblicazione, garantendo che rispettino le nostre linee guida e siano di alta qualità.
                    </p>

                    <p class="fs-5">
                        Lavorando con noi, avrai la possibilità di guadagnare extra, gestendo il tuo tempo con totale
                        flessibilità. Ti offriamo l'opportunità di sviluppare competenze preziose nel campo della
                        moderazione e della revisione dei contenuti, collaborando con un team dinamico e innovativo.
                    </p>

                    <p class="fs-5">
                        Se sei affidabile, attento ai dettagli e hai buone capacità di comunicazione, questa è
                        l'occasione
                        giusta per te.
                    </p>
                </div>

                <div
                    class="col-12 col-md-6 col-lg-4 text-center d-flex flex-column justify-content-center align-items-center p-5">
                    @guest
                        <p class="fs-5">

                            <a class="text-decoration-none active" href="{{ route('register') }}">Registrati</a> oggi
                            stesso, inizia a guadagnare con <strong>THRIFT SHOP</strong>.
                        </p>
                    @endguest


                    @auth
                        <div>
                            <p class="fs-5">

                                Compila il form per richiedere di diventare un revisore, inizia a guadagnare con <strong>THRIFT SHOP</strong>.
                            </p>
                            <form class="text-white form" action="{{ route('revisor.become') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nome Utente</label>
                                    <input name="name" type="text" class="form-control input_focused" id="name"
                                        value="{{ Auth::user()->name }}">
                                    @error('name')
                                        <div class="text-danger fw-bold "> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Indirizzo Email</label>
                                    <input name="email" type="email" class="form-control input_focused" id="email"
                                        value="{{ Auth::user()->email }}">
                                    <div class="text-danger fw-bold ">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Inserisci un messaggio</label>
                                    <input name="message" type="text" class="form-control input_focused" id="message" cols="30" rows="5">
                                {{-- </textarea> --}}
                                    <div class="text-danger fw-bold ">
                                        @error('message')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn_standard" type="submit">Invia</button>

                                </div>
                            </form>
                        </div>
                    @endauth

                </div>


            </div>
            <div class="col-12 col-md-8 col-lg-10 mt-5 mx-auto d-flex flex-column" id="about">
                <h2 class="text-center mb-5 fw-bolder text-uppercase">La nostra azienda</h2>

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p class="fs-5">
                            Fondata nel 1824, ThriftShop è nata con l'obiettivo di rivoluzionare il modo in cui
                            le persone comprano e vendono beni e servizi online. Iniziando come una piccola startup con
                            una
                            visione ambiziosa, abbiamo lavorato instancabilmente per costruire una piattaforma che fosse
                            intuitiva, sicura e accessibile a tutti.
                        </p>
                        <p class="fs-5">
                            Nel corso degli anni, abbiamo ampliato i nostri servizi per coprire una vasta gamma di
                            categorie,
                            dai
                            beni di consumo ai servizi professionali, rendendo più semplice per gli utenti trovare
                            esattamente
                            ciò di cui hanno bisogno. Grazie all'impegno costante per la qualità e l'affidabilità, siamo
                            diventati uno dei principali siti di annunci online, con milioni di utenti attivi ogni mese.
                        </p>
                        <p class="fs-5">
                            Il nostro successo si basa sulla fiducia che i nostri utenti ripongono in noi. Per garantire
                            che
                            ogni
                            annuncio sia conforme ai nostri standard di qualità, abbiamo introdotto un rigoroso processo
                            di
                            revisione. Ogni giorno, un team dedicato di revisori esamina gli annunci inviati per
                            assicurarsi che
                            rispettino le nostre linee guida, offrendo così un'esperienza sicura e piacevole per tutti.
                        </p>
                        <p class="fs-5">
                            Oltre a fornire una piattaforma di annunci, ci impegniamo a innovare costantemente,
                            migliorando le
                            funzionalità esistenti e introducendo nuove caratteristiche che rispondano alle esigenze dei
                            nostri
                            utenti. Siamo orgogliosi di creare una comunità vibrante dove persone da tutto il mondo
                            possono
                            connettersi, fare affari e crescere insieme.
                        </p>
                        <p class="fs-5">
                            In ThriftShop, crediamo nel potere della condivisione e della collaborazione. La nostra
                            storia è
                            fatta di migliaia di storie di successo dei nostri utenti, e ogni giorno lavoriamo per
                            scrivere un
                            nuovo capitolo di questa avventura. Unisciti a noi e scopri cosa rende ThriftShop la scelta
                            preferita per gli annunci online.
                        </p>
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                        <img src="https:\\picsum.photos/400/600" alt="">
                    </div>
                </div>

            </div>


        </div>
    </div>

</x-layout>
