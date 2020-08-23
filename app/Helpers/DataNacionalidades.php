<?php

namespace App\Helpers;

class DataNacionalidades
{
    public static function getData(){
        $data = [
            ['nome' => 'Antiguano', 'pais' => 'Antígua'],
            ['nome' => 'Antiguano', 'pais' => 'Barbuda'],
            ['nome' => 'Argentino', 'pais' => 'Argentina'],
            ['nome' => 'Bahamense', 'pais' => 'Bahamas'],
            ['nome' => 'Barbadiano', 'pais' => 'Barbados'],
            ['nome' => 'Belizenho', 'pais' => 'Belize'],
            ['nome' => 'Boliviano', 'pais' => 'Bolívia'],
            ['nome' => 'Brasileiro', 'pais' => 'Brasil'],
            ['nome' => 'Chileno', 'pais' => 'Chile'],
            ['nome' => 'Colombiano', 'pais' => 'Colômbia'],
            ['nome' => 'Costarriquenho', 'pais' => 'Costa Rica'],
            ['nome' => 'Cubano', 'pais' => 'Cuba'],
            ['nome' => 'Dominicano', 'pais' => 'Dominica'],
            ['nome' => 'Equatoriano', 'pais' => 'Equador'],
            ['nome' => 'Salvadorenho', 'pais' => 'El Salvador'],
            ['nome' => 'Granadino', 'pais' => 'Granada'],
            ['nome' => 'Guatemalteco', 'pais' => 'Guatemala'],
            ['nome' => 'Guianês', 'pais' => 'Guiana'],
            ['nome' => 'Guianense', 'pais' => 'Guiana Francesa'],
            ['nome' => 'Haitiano', 'pais' => 'Haiti'],
            ['nome' => 'Hondurenho', 'pais' => 'Honduras'],
            ['nome' => 'Jamaicano', 'pais' => 'Jamaica'],
            ['nome' => 'Mexicano', 'pais' => 'México'],
            ['nome' => 'Nicaraguense', 'pais' => 'Nicarágua'],
            ['nome' => 'Panamenho', 'pais' => 'Panamá'],
            ['nome' => 'Paraguaio', 'pais' => 'Paraguai'],
            ['nome' => 'Peruano', 'pais' => 'Peru'],
            ['nome' => 'Portorriquenho', 'pais' => 'Porto Rico'],
            ['nome' => 'Dominicana', 'pais' => 'República Dominicana'],
            ['nome' => 'São-cristovense', 'pais' => 'São Cristóvão e Nevis'],
            ['nome' => 'São-vicentino', 'pais' => 'São Vicente e Granadinas'],
            ['nome' => 'Santa-lucense', 'pais' => 'Santa Lúcia'],
            ['nome' => 'Surinamês', 'pais' => 'Suriname'],
            ['nome' => 'Trindadense', 'pais' => 'Trinidad e Tobago'],
            ['nome' => 'Uruguaio', 'pais' => 'Uruguai'],
            ['nome' => 'Venezuelano', 'pais' => 'Venezuela'],
            ['nome' => 'Alemão', 'pais' => 'Alemanha'],
            ['nome' => 'Austríaco', 'pais' => 'Áustria'],
            ['nome' => 'Belga', 'pais' => 'Bélgica'],
            ['nome' => 'Croata', 'pais' => 'Croácia'],
            ['nome' => 'Dinamarquês', 'pais' => 'Dinamarca'],
            ['nome' => 'Eslovaco', 'pais' => 'Eslováquia'],
            ['nome' => 'Esloveno', 'pais' => 'Eslovênia'],
            ['nome' => 'Espanhol', 'pais' => 'Espanha'],
            ['nome' => 'Francês', 'pais' => 'França'],
            ['nome' => 'Grego', 'pais' => 'Grécia'],
            ['nome' => 'Húngaro', 'pais' => 'Hungria'],
            ['nome' => 'Irlandês', 'pais' => 'Irlanda'],
            ['nome' => 'Italiano', 'pais' => 'Itália'],
            ['nome' => 'Noruego', 'pais' => 'Noruega'],
            ['nome' => 'Holandês', 'pais' => 'Países Baixos'],
            ['nome' => 'Polonês', 'pais' => 'Polônia'],
            ['nome' => 'Português', 'pais' => 'Portugal'],
            ['nome' => 'Britânico', 'pais' => 'Reino Unido'],
            ['nome' => 'Inglês', 'pais' => 'Inglaterra'],
            ['nome' => 'Galês', 'pais' => 'País de Gales'],
            ['nome' => 'Escocês', 'pais' => 'Escócia'],
            ['nome' => 'Romeno', 'pais' => 'Romênia'],
            ['nome' => 'Russo', 'pais' => 'Rússia'],
            ['nome' => 'Sérvio', 'pais' => 'Sérvio'],
            ['nome' => 'Sueco', 'pais' => 'Suécia'],
            ['nome' => 'Suíço', 'pais' => 'Suíça'],
            ['nome' => 'Turco', 'pais' => 'Turquia'],
            ['nome' => 'Ucraniano', 'pais' => 'Ucrânia'],
            ['nome' => 'Americano', 'pais' => 'Estados Unidos'],
            ['nome' => 'Canadense', 'pais' => 'Canadá'],
            ['nome' => 'Angolano', 'pais' => 'Angola'],
            ['nome' => 'Moçambicano', 'pais' => 'Moçambique'],
            ['nome' => 'Sul-africano', 'pais' => 'África do Sul'],
            ['nome' => 'Zimbabuense', 'pais' => 'Zimbabue'],
            ['nome' => 'Argélia', 'pais' => 'Argélia'],
            ['nome' => 'Comorense', 'pais' => 'Comores'],
            ['nome' => 'Egípcio', 'pais' => 'Egito'],
            ['nome' => 'Líbio', 'pais' => 'Líbia'],
            ['nome' => 'Marroquino', 'pais' => 'Marrocos'],
            ['nome' => 'Ganés', 'pais' => 'Gana'],
            ['nome' => 'Queniano', 'pais' => 'Quênia'],
            ['nome' => 'Ruandês', 'pais' => 'Ruanda'],
            ['nome' => 'Ugandense', 'pais' => 'Uganda'],
            ['nome' => 'Bechuano', 'pais' => 'Botsuana'],
            ['nome' => 'Marfinense', 'pais' => 'Costa do Marfim'],
            ['nome' => 'Camaronense', 'pais' => 'Camarões'],
            ['nome' => 'Nigeriano', 'pais' => 'Nigéria'],
            ['nome' => 'Somali', 'pais' => 'Somália'],
            ['nome' => 'Australiano', 'pais' => 'Austrália'],
            ['nome' => 'Neozelandês', 'pais' => 'Nova Zelândia'],
            ['nome' => 'Afegão', 'pais' => 'Afeganistão'],
            ['nome' => 'Saudita', 'pais' => 'Arábia Saudita'],
            ['nome' => 'Armeno', 'pais' => 'Armênia'],
            ['nome' => 'Bangladesh', 'pais' => 'Armeno'],
            ['nome' => 'Chinês', 'pais' => 'China'],
            ['nome' => 'Norte-coreano', 'pais' => 'Coréia do Norte'],
            ['nome' => 'Sul-coreano', 'pais' => 'Coréia do Sul'],
            ['nome' => 'Indiano', 'pais' => 'Índia'],
            ['nome' => 'Indonésio', 'pais' => 'Indonésia'],
            ['nome' => 'Iraquiano', 'pais' => 'Iraque'],
            ['nome' => 'Iraniano', 'pais' => 'Irã'],
            ['nome' => 'Israelita', 'pais' => 'Israel'],
            ['nome' => 'Japonês', 'pais' => 'Japão'],
            ['nome' => 'Malaio', 'pais' => 'Malásia'],
            ['nome' => 'Nepalês', 'pais' => 'Nepal'],
            ['nome' => 'Omanense', 'pais' => 'Omã'],
            ['nome' => 'Paquistanês', 'pais' => 'Paquistão'],
            ['nome' => 'Palestino', 'pais' => 'Palestina'],
            ['nome' => 'Qatarense', 'pais' => 'Qatar'],
            ['nome' => 'Sírio', 'pais' => 'Síria'],
            ['nome' => 'Cingalês', 'pais' => 'Sri Lanka'],
            ['nome' => 'Tailandês', 'pais' => 'Tailândia'],
            ['nome' => 'Timorense', 'pais' => 'Timor-Leste'],
            ['nome' => 'Árabe', 'pais' => 'Emirados Árabes Unidos'],
            ['nome' => 'Vietnamita', 'pais' => 'Vietnã'],
            ['nome' => 'Iemenita', 'pais' => 'Iêmen']
        ];
        return $data;
    }
}