<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            "El Encanto",
            "La Chorrera",
            "La Pedrera",
            "La Victoria",
            "Leticia",
            "Miriti - Paraná",
            "Puerto Alegria",
            "Puerto Arica",
            "Puerto Nariño",
            "Puerto Santander",
            "Tarapacá",
            "Cáceres",
            "Caucasia",
            "El Bagre",
            "Nechí",
            "Tarazá",
            "Zaragoza",
            "Caracolí",
            "Maceo",
            "Puerto Berrio",
            "Puerto Nare",
            "Puerto Triunfo",
            "Yondó",
            "Amalfi",
            "Anorí",
            "Cisneros",
            "Remedios",
            "San Roque",
            "Santo Domingo",
            "Segovia",
            "Vegachí",
            "Yalí",
            "Yolombó",
            "Angostura",
            "Belmira",
            "Briceño",
            "Campamento",
            "Carolina",
            "Don Matias",
            "Entrerrios",
            "Gómez Plata",
            "Guadalupe",
            "Ituango",
            "San Andrés",
            "San José De La Montaña",
            "San Pedro",
            "Santa Rosa De Osos",
            "Toledo",
            "Valdivia",
            "Yarumal",
            "Abriaquí",
            "Anza",
            "Armenia",
            "Buriticá",
            "Cañasgordas",
            "Dabeiba",
            "Ebéjico",
            "Frontino",
            "Giraldo",
            "Heliconia",
            "Liborina",
            "Olaya",
            "Peque",
            "Sabanalarga",
            "San Jerónimo",
            "Santafé De Antioquia",
            "Sopetran",
            "Uramita",
            "Abejorral",
            "Alejandría",
            "Argelia",
            "Carmen De Viboral",
            "Cocorná",
            "Concepción",
            "Granada",
            "Guarne",
            "Guatape",
            "La Ceja",
            "La Unión",
            "Marinilla",
            "Nariño",
            "Peñol",
            "Retiro",
            "Rionegro",
            "San Carlos",
            "San Francisco",
            "San Luis",
            "San Rafael",
            "San Vicente",
            "Santuario",
            "Sonson",
            "Amaga",
            "Andes",
            "Angelopolis",
            "Betania",
            "Betulia",
            "Caicedo",
            "Caramanta",
            "Ciudad Bolívar",
            "Concordia",
            "Fredonia",
            "Hispania",
            "Jardín",
            "Jericó",
            "La Pintada",
            "Montebello",
            "Pueblorrico",
            "Salgar",
            "Santa Barbara",
            "Támesis",
            "Tarso",
            "Titiribí",
            "Urrao",
            "Valparaiso",
            "Venecia",
            "Apartadó",
            "Arboletes",
            "Carepa",
            "Chigorodó",
            "Murindó",
            "Mutata",
            "Necoclí",
            "San Juan De Uraba",
            "San Pedro De Uraba",
            "Turbo",
            "Vigía Del Fuerte",
            "Barbosa",
            "Bello",
            "Caldas",
            "Copacabana",
            "Envigado",
            "Girardota",
            "Itagui",
            "La Estrella",
            "Medellín",
            "Sabaneta",
            "Arauca",
            "Arauquita",
            "Cravo Norte",
            "Fortul",
            "Puerto Rondón",
            "Saravena",
            "Tame",
            "Providencia Y Santa Catalina",
            "San Andres",
            "Barranquilla",
            "Galapa",
            "Malambo",
            "Puerto Colombia",
            "Soledad",
            "Campo De La Cruz",
            "Candelaria",
            "Luruaco",
            "Manati",
            "Repelon",
            "Santa Lucia",
            "Suan",
            "Baranoa",
            "Palmar De Varela",
            "Polonuevo",
            "Ponedera",
            "Sabanagrande",
            "Sabanalarga",
            "Santo Tomas",
            "Juan De Acosta",
            "Piojó",
            "Tubara",
            "Usiacuri",
            "Bogota D.C.",
            "Cicuco",
            "Hatillo De Loba",
            "Margarita",
            "Mompós",
            "San Fernando",
            "Talaigua Nuevo",
            "Arjona",
            "Arroyohondo",
            "Calamar",
            "Cartagena",
            "Clemencia",
            "Mahates",
            "San Cristobal",
            "San Estanislao",
            "Santa Catalina",
            "Santa Rosa De Lima",
            "Soplaviento",
            "Turbaco",
            "Turbana",
            "Villanueva",
            "Altos Del Rosario",
            "Barranco De Loba",
            "El Peñon",
            "Regidor",
            "Río Viejo",
            "San Martin De Loba",
            "Arenal",
            "Cantagallo",
            "Morales",
            "San Pablo",
            "Santa Rosa Del Sur",
            "Simití",
            "Achí",
            "Magangué",
            "Montecristo",
            "Pinillos",
            "San Jacinto Del Cauca",
            "Tiquisio",
            "Carmen De Bolívar",
            "Córdoba",
            "El Guamo",
            "María La Baja",
            "San Jacinto",
            "San Juan Nepomuceno",
            "Zambrano",
            "Chíquiza",
            "Chivatá",
            "Cómbita",
            "Cucaita",
            "Motavita",
            "Oicatá",
            "Samacá",
            "Siachoque",
            "Sora",
            "Soracá",
            "Sotaquirá",
            "Toca",
            "Tunja",
            "Tuta",
            "Ventaquemada",
            "Chiscas",
            "Cubará",
            "El Cocuy",
            "El Espino",
            "Guacamayas",
            "Güicán",
            "Panqueba",
            "Labranzagrande",
            "Pajarito",
            "Paya",
            "Pisba",
            "Berbeo",
            "Campohermoso",
            "Miraflores",
            "Páez",
            "San Eduardo",
            "Zetaquira",
            "Boyacá",
            "Ciénega",
            "Jenesano",
            "Nuevo Colón",
            "Ramiriquí",
            "Rondón",
            "Tibaná",
            "Turmequé",
            "Umbita",
            "Viracachá",
            "Chinavita",
            "Garagoa",
            "Macanal",
            "Pachavita",
            "San Luis De Gaceno",
            "Santa María",
            "Boavita",
            "Covarachía",
            "La Uvita",
            "San Mateo",
            "Sativanorte",
            "Sativasur",
            "Soatá",
            "Susacón",
            "Tipacoque",
            "Briceño",
            "Buenavista",
            "Caldas",
            "Chiquinquirá",
            "Coper",
            "La Victoria",
            "Maripí",
            "Muzo",
            "Otanche",
            "Pauna",
            "Puerto Boyaca",
            "Quípama",
            "Saboyá",
            "San Miguel De Sema",
            "San Pablo Borbur",
            "Tununguá",
            "Almeida",
            "Chivor",
            "Guateque",
            "Guayatá",
            "La Capilla",
            "Somondoco",
            "Sutatenza",
            "Tenza",
            "Arcabuco",
            "Chitaraque",
            "Gachantivá",
            "Moniquirá",
            "Ráquira",
            "Sáchica",
            "San José De Pare",
            "Santa Sofía",
            "Santana",
            "Sutamarchán",
            "Tinjacá",
            "Togüí",
            "Villa De Leyva",
            "Aquitania",
            "Cuítiva",
            "Firavitoba",
            "Gameza",
            "Iza",
            "Mongua",
            "Monguí",
            "Nobsa",
            "Pesca",
            "Sogamoso",
            "Tibasosa",
            "Tópaga",
            "Tota",
            "Belén",
            "Busbanzá",
            "Cerinza",
            "Corrales",
            "Duitama",
            "Floresta",
            "Paipa",
            "San Rosa Viterbo",
            "Tutazá",
            "Betéitiva",
            "Chita",
            "Jericó",
            "Paz De Río",
            "Socha",
            "Socotá",
            "Tasco",
            "Filadelfia",
            "La Merced",
            "Marmato",
            "Riosucio",
            "Supía",
            "Manzanares",
            "Marquetalia",
            "Marulanda",
            "Pensilvania",
            "Anserma",
            "Belalcázar",
            "Risaralda",
            "San José",
            "Viterbo",
            "Chinchina",
            "Manizales",
            "Neira",
            "Palestina",
            "Villamaria",
            "Aguadas",
            "Aranzazu",
            "Pácora",
            "Salamina",
            "La Dorada",
            "Norcasia",
            "Samaná",
            "Victoria",
            "Albania",
            "Belén De Los Andaquies",
            "Cartagena Del Chairá",
            "Currillo",
            "El Doncello",
            "El Paujil",
            "Florencia",
            "La Montañita",
            "Milan",
            "Morelia",
            "Puerto Rico",
            "San Jose Del Fragua",
            "San Vicente Del Caguán",
            "Solano",
            "Solita",
            "Valparaiso",
            "Aguazul",
            "Chameza",
            "Hato Corozal",
            "La Salina",
            "Maní",
            "Monterrey",
            "Nunchía",
            "Orocué",
            "Paz De Ariporo",
            "Pore",
            "Recetor",
            "Sabanalarga",
            "Sácama",
            "San Luis De Palenque",
            "Támara",
            "Tauramena",
            "Trinidad",
            "Villanueva",
            "Yopal",
            "Cajibío",
            "El Tambo",
            "La Sierra",
            "Morales",
            "Piendamo",
            "Popayán",
            "Rosas",
            "Sotara",
            "Timbio",
            "Buenos Aires",
            "Caloto",
            "Corinto",
            "Miranda",
            "Padilla",
            "Puerto Tejada",
            "Santander De Quilichao",
            "Suarez",
            "Villa Rica",
            "Guapi",
            "Lopez",
            "Timbiqui",
            "Caldono",
            "Inzá",
            "Jambalo",
            "Paez",
            "Purace",
            "Silvia",
            "Toribio",
            "Totoro",
            "Almaguer",
            "Argelia",
            "Balboa",
            "Bolívar",
            "Florencia",
            "La Vega",
            "Mercaderes",
            "Patia",
            "Piamonte",
            "San Sebastian",
            "Santa Rosa",
            "Sucre",
            "Becerril",
            "Chimichagua",
            "Chiriguana",
            "Curumaní",
            "La Jagua De Ibirico",
            "Pailitas",
            "Tamalameque",
            "Astrea",
            "Bosconia",
            "El Copey",
            "El Paso",
            "Agustín Codazzi",
            "La Paz",
            "Manaure",
            "Pueblo Bello",
            "San Diego",
            "Valledupar",
            "Aguachica",
            "Gamarra",
            "González",
            "La Gloria",
            "Pelaya",
            "Río De Oro",
            "San Alberto",
            "San Martín",
            "Atrato",
            "Bagadó",
            "Bojaya",
            "El Carmen De Atrato",
            "Lloró",
            "Medio Atrato",
            "Quibdó",
            "Rio Quito",
            "Acandí",
            "Belén De Bajira",
            "Carmén Del Darién",
            "Riosucio",
            "Unguía",
            "Bahía Solano",
            "Juradó",
            "Nuquí",
            "Alto Baudó",
            "Bajo Baudó",
            "El Litoral Del San Juan",
            "Medio Baudó",
            "Canton De San Pablo",
            "Certegui",
            "Condoto",
            "Itsmina",
            "Medio San Juan",
            "Nóvita",
            "Río Frío",
            "San José Del Palmar",
            "Sipí",
            "Tadó",
            "Union Panamericana",
            "Tierralta",
            "Valencia",
            "Chimá",
            "Cotorra",
            "Lorica",
            "Momil",
            "Purísima",
            "Montería",
            "Canalete",
            "Los Córdobas",
            "Moñitos",
            "Puerto Escondido",
            "San Antero",
            "San Bernardo Del Viento",
            "Chinú",
            "Sahagún",
            "San Andrés Sotavento",
            "Ayapel",
            "Buenavista",
            "La Apartada",
            "Montelíbano",
            "Planeta Rica",
            "Pueblo Nuevo",
            "Puerto Libertador",
            "Cereté",
            "Ciénaga De Oro",
            "San Carlos",
            "San Pelayo",
            "Chocontá",
            "Macheta",
            "Manta",
            "Sesquilé",
            "Suesca",
            "Tibirita",
            "Villapinzón",
            "Agua De Dios",
            "Girardot",
            "Guataquí",
            "Jerusalén",
            "Nariño",
            "Nilo",
            "Ricaurte",
            "Tocaima",
            "Caparrapí",
            "Guaduas",
            "Puerto Salgar",
            "Albán",
            "La Peña",
            "La Vega",
            "Nimaima",
            "Nocaima",
            "Quebradanegra",
            "San Francisco",
            "Sasaima",
            "Supatá",
            "Útica",
            "Vergara",
            "Villeta",
            "Gachala",
            "Gacheta",
            "Gama",
            "Guasca",
            "Guatavita",
            "Junín",
            "La Calera",
            "Ubalá",
            "Beltrán",
            "Bituima",
            "Chaguaní",
            "Guayabal De Siquima",
            "Puli",
            "San Juan De Río Seco",
            "Vianí",
            "Medina",
            "Paratebueno",
            "Caqueza",
            "Chipaque",
            "Choachí",
            "Fomeque",
            "Fosca",
            "Guayabetal",
            "Gutiérrez",
            "Quetame",
            "Ubaque",
            "Une",
            "El Peñón",
            "La Palma",
            "Pacho",
            "Paime",
            "San Cayetano",
            "Topaipi",
            "Villagomez",
            "Yacopí",
            "Cajicá",
            "Chía",
            "Cogua",
            "Gachancipá",
            "Nemocon",
            "Sopó",
            "Tabio",
            "Tocancipá",
            "Zipaquirá",
            "Bojacá",
            "Cota",
            "El Rosal",
            "Facatativá",
            "Funza",
            "Madrid",
            "Mosquera",
            "Subachoque",
            "Tenjo",
            "Zipacon",
            "Sibaté",
            "Soacha",
            "Arbeláez",
            "Cabrera",
            "Fusagasugá",
            "Granada",
            "Pandi",
            "Pasca",
            "San Bernardo",
            "Silvania",
            "Tibacuy",
            "Venecia",
            "Anapoima",
            "Anolaima",
            "Apulo",
            "Cachipay",
            "El Colegio",
            "La Mesa",
            "Quipile",
            "San Antonio De Tequendama",
            "Tena",
            "Viotá",
            "Carmen De Carupa",
            "Cucunubá",
            "Fúquene",
            "Guachetá",
            "Lenguazaque",
            "Simijaca",
            "Susa",
            "Sutatausa",
            "Tausa",
            "Ubate",
            "Barranco Mina",
            "Cacahual",
            "Inírida",
            "La Guadalupe",
            "Mapiripan",
            "Morichal",
            "Pana Pana",
            "Puerto Colombia",
            "San Felipe",
            "Calamar",
            "El Retorno",
            "Miraflores",
            "San José Del Guaviare",
            "Agrado",
            "Altamira",
            "Garzón",
            "Gigante",
            "Guadalupe",
            "Pital",
            "Suaza",
            "Tarqui",
            "Aipe",
            "Algeciras",
            "Baraya",
            "Campoalegre",
            "Colombia",
            "Hobo",
            "Iquira",
            "Neiva",
            "Palermo",
            "Rivera",
            "Santa María",
            "Tello",
            "Teruel",
            "Villavieja",
            "Yaguará",
            "La Argentina",
            "La Plata",
            "Nátaga",
            "Paicol",
            "Tesalia",
            "Acevedo",
            "Elías",
            "Isnos",
            "Oporapa",
            "Palestina",
            "Pitalito",
            "Saladoblanco",
            "San Agustín",
            "Timaná",
            "Albania",
            "Dibulla",
            "Maicao",
            "Manaure",
            "Riohacha",
            "Uribia",
            "Barrancas",
            "Distraccion",
            "El Molino",
            "Fonseca",
            "Hatonuevo",
            "La Jagua Del Pilar",
            "San Juan Del Cesar",
            "Urumita",
            "Villanueva",
            "Ariguaní",
            "Chibolo",
            "Nueva Granada",
            "Plato",
            "Sabanas De San Angel",
            "Tenerife",
            "Algarrobo",
            "Aracataca",
            "Ciénaga",
            "El Reten",
            "Fundacion",
            "Pueblo Viejo",
            "Zona Bananera",
            "Cerro San Antonio",
            "Concordia",
            "El Piñon",
            "Pedraza",
            "Pivijay",
            "Remolino",
            "Salamina",
            "Sitionuevo",
            "Zapayan",
            "Santa Marta",
            "El Banco",
            "Guamal",
            "Pijiño Del Carmen",
            "San Sebastian De Buenavista",
            "San Zenon",
            "Santa Ana",
            "Santa Barbara De Pinto",
            "El Castillo",
            "El Dorado",
            "Fuente De Oro",
            "Granada",
            "La Macarena",
            "La Uribe",
            "Lejanías",
            "Mapiripan",
            "Mesetas",
            "Puerto Concordia",
            "Puerto Lleras",
            "Puerto Rico",
            "San Juan De Arama",
            "Vista Hermosa",
            "Villavicencio",
            "Acacias",
            "Barranca De Upia",
            "Castilla La Nueva",
            "Cumaral",
            "El Calvario",
            "Guamal",
            "Restrepo",
            "San Carlos Guaroa",
            "San Juanito",
            "San Luis De Cubarral",
            "San Martín",
            "Cabuyaro",
            "Puerto Gaitán",
            "Puerto Lopez",
            "Chachagui",
            "Consaca",
            "El Peñol",
            "El Tambo",
            "La Florida",
            "Nariño",
            "Pasto",
            "Sandoná",
            "Tangua",
            "Yacuanquer",
            "Ancuya",
            "Guaitarilla",
            "La Llanada",
            "Linares",
            "Los Andes",
            "Mallama",
            "Ospina",
            "Providencia",
            "Ricaurte",
            "Samaniego",
            "Santa Cruz",
            "Sapuyes",
            "Tuquerres",
            "Barbacoas",
            "El Charco",
            "Francisco Pizarro",
            "La Tola",
            "Magui",
            "Mosquera",
            "Olaya Herrera",
            "Roberto Payan",
            "Santa Barbara",
            "Tumaco",
            "Alban",
            "Arboleda",
            "Belen",
            "Buesaco",
            "Colon",
            "Cumbitara",
            "El Rosario",
            "El Tablon De Gomez",
            "La Cruz",
            "La Union",
            "Leiva",
            "Policarpa",
            "San Bernardo",
            "San Lorenzo",
            "San Pablo",
            "San Pedro De Cartago",
            "Taminango",
            "Aldana",
            "Contadero",
            "Córdoba",
            "Cuaspud",
            "Cumbal",
            "Funes",
            "Guachucal",
            "Gualmatan",
            "Iles",
            "Imues",
            "Ipiales",
            "Potosí",
            "Puerres",
            "Pupiales",
            "Arboledas",
            "Cucutilla",
            "Gramalote",
            "Lourdes",
            "Salazar",
            "Santiago",
            "Villa Caro",
            "Bucarasica",
            "El Tarra",
            "Sardinata",
            "Tibú",
            "Abrego",
            "Cachirá",
            "Convención",
            "El Carmen",
            "Hacarí",
            "La Esperanza",
            "La Playa",
            "Ocaña",
            "San Calixto",
            "Teorama",
            "Cúcuta",
            "El Zulia",
            "Los Patios",
            "Puerto Santander",
            "San Cayetano",
            "Villa Del Rosario",
            "Cácota",
            "Chitagá",
            "Mutiscua",
            "Pamplona",
            "Pamplonita",
            "Silos",
            "Bochalema",
            "Chinácota",
            "Durania",
            "Herrán",
            "Labateca",
            "Ragonvalia",
            "Toledo",
            "Colón",
            "Mocoa",
            "Orito",
            "Puerto Asis",
            "Puerto Caicedo",
            "Puerto Guzman",
            "Puerto Leguizamo",
            "San Francisco",
            "San Miguel",
            "Santiago",
            "Sibundoy",
            "Valle Del Guamuez",
            "Villa Garzon",
            "Armenia",
            "Buenavista",
            "Calarca",
            "Cordoba",
            "Genova",
            "Pijao",
            "Filandia",
            "Salento",
            "Circasia",
            "La Tebaida",
            "Montengro",
            "Quimbaya",
            "Dosquebradas",
            "La Virginia",
            "Marsella",
            "Pereira",
            "Santa Rosa De Cabal",
            "Apía",
            "Balboa",
            "Belén De Umbría",
            "Guática",
            "La Celia",
            "Quinchia",
            "Santuario",
            "Mistrató",
            "Pueblo Rico",
            "Chima",
            "Confines",
            "Contratación",
            "El Guacamayo",
            "Galán",
            "Gambita",
            "Guadalupe",
            "Guapotá",
            "Hato",
            "Oiba",
            "Palmar",
            "Palmas Del Socorro",
            "Santa Helena Del Opón",
            "Simacota",
            "Socorro",
            "Suaita",
            "Capitanejo",
            "Carcasí",
            "Cepitá",
            "Cerrito",
            "Concepción",
            "Enciso",
            "Guaca",
            "Macaravita",
            "Málaga",
            "Molagavita",
            "San Andrés",
            "San José De Miranda",
            "San Miguel",
            "Aratoca",
            "Barichara",
            "Cabrera",
            "Charalá",
            "Coromoro",
            "Curití",
            "Encino",
            "Jordán",
            "Mogotes",
            "Ocamonte",
            "Onzaga",
            "Páramo",
            "Pinchote",
            "San Gil",
            "San Joaquín",
            "Valle De San José",
            "Villanueva",
            "Barrancabermeja",
            "Betulia",
            "El Carmen De Chucurí",
            "Puerto Wilches",
            "Sabana De Torres",
            "San Vicente De Chucurí",
            "Zapatoca",
            "Bucaramanga",
            "California",
            "Charta",
            "El Playón",
            "Floridablanca",
            "Girón",
            "Lebríja",
            "Los Santos",
            "Matanza",
            "Piedecuesta",
            "Rionegro",
            "Santa Bárbara",
            "Surata",
            "Tona",
            "Vetas",
            "Aguada",
            "Albania",
            "Barbosa",
            "Bolívar",
            "Chipatá",
            "Cimitarra",
            "El Peñón",
            "Florián",
            "Guavatá",
            "Guepsa",
            "Jesús María",
            "La Belleza",
            "La Paz",
            "Landázuri",
            "Puente Nacional",
            "Puerto Parra",
            "San Benito",
            "Sucre",
            "Vélez",
            "Guaranda",
            "Majagual",
            "Sucre",
            "Chalán",
            "Coloso",
            "Morroa",
            "Ovejas",
            "Sincelejo",
            "Coveñas",
            "Palmito",
            "San Onofre",
            "Santiago De Tolú",
            "Tolú Viejo",
            "Buenavista",
            "Corozal",
            "El Roble",
            "Galeras",
            "Los Palmitos",
            "Sampués",
            "San Juan Betulia",
            "San Pedro",
            "Sincé",
            "Caimito",
            "La Unión",
            "San Benito Abad",
            "San Marcos",
            "Ambalema",
            "Armero",
            "Falan",
            "Fresno",
            "Honda",
            "Mariquita",
            "Palocabildo",
            "Carmen De Apicalá",
            "Cunday",
            "Icononzo",
            "Melgar",
            "Villarrica",
            "Ataco",
            "Chaparral",
            "Coyaima",
            "Natagaima",
            "Ortega",
            "Planadas",
            "Rioblanco",
            "Roncesvalles",
            "San Antonio",
            "Alvarado",
            "Anzoátegui",
            "Cajamarca",
            "Coello",
            "Espinal",
            "Flandes",
            "Ibague",
            "Piedras",
            "Rovira",
            "San Luis",
            "Valle De San Juan",
            "Alpujarra",
            "Dolores",
            "Guamo",
            "Prado",
            "Purificación",
            "Saldaña",
            "Suárez",
            "Casabianca",
            "Herveo",
            "Lerida",
            "Libano",
            "Murillo",
            "Santa Isabel",
            "Venadillo",
            "Villahermosa",
            "Andalucía",
            "Buga",
            "Bugalagrande",
            "Calima",
            "El Cerrito",
            "Ginebra",
            "Guacarí",
            "Restrepo",
            "Riofrio",
            "San Pedro",
            "Trujillo",
            "Tuluá",
            "Yotoco",
            "Alcala",
            "Ansermanuevo",
            "Argelia",
            "Bolívar",
            "Cartago",
            "El Águila",
            "El Cairo",
            "El Dovio",
            "La Unión",
            "La Victoria",
            "Obando",
            "Roldanillo",
            "Toro",
            "Ulloa",
            "Versalles",
            "Zarzal",
            "Buenaventura",
            "Caicedonia",
            "Sevilla",
            "Cali",
            "Candelaria",
            "Dagua",
            "Florida",
            "Jamundí",
            "La Cumbre",
            "Palmira",
            "Pradera",
            "Vijes",
            "Yumbo",
            "Caruru",
            "Mitú",
            "Pacoa",
            "Papunahua",
            "Taraira",
            "Yavaraté",
            "Cumaribo",
            "La Primavera",
            "Puerto Carreño",
            "Santa Rosalía"
        ];

        foreach ($cities as $city) {
            if(!City::where('city', $city)->first()){
                $modelCity = new City();
                $modelCity->city = $city;
                $modelCity->save();
            }
                
        }
    }
}
