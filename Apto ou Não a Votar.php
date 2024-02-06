<?php
//By: Erike Fahel - Atividade Semanal

// Solicitando a idade e se a pessoa é analfabeta ou não
$idade = readline("Digite a idade da pessoa: ");
$alfabetizado = strtoupper(readline("Digite 'A' para Analfabeto ou 'B' para Alfabetizado: "));

// Solicitando se a idade é menor que 16 anos
$idadeAbaixoDe16 = ($idade < 16) ? true : false;

// Se a idade é menor que 16 anos, informa que não pode votar
echo ($idadeAbaixoDe16) ? "Não pode votar. Menores de 16 anos não podem votar.\n" : "";

// Se a idade não é menor que 16 anos, verifica se a idade está entre 16 e 17 anos
if (!$idadeAbaixoDe16) {
    $idadeEntre16e17 = ($idade > 15 && $idade < 18) ? true : false;

    // Se a idade está entre 16 e 17 anos, informa que o voto é facultativo
    echo ($idadeEntre16e17) ? "Voto facultativo. Pessoas com idade entre 16 e 17 anos têm voto facultativo.\n" : "";

    // Se a idade não está entre 16 e 17 anos, verifica se a idade é maior que 70 anos
    if (!$idadeEntre16e17) {
        $idadeAcimaDe70 = ($idade > 70) ? true : false;

        // Se a idade é maior que 70 anos, informa que o voto é facultativo
        echo ($idadeAcimaDe70) ? "Voto facultativo. Pessoas com 70 anos ou mais têm voto facultativo.\n" : "";

        // Se a idade não está entre 16 e 17 anos nem é maior que 70 anos, verifica as outras condições
        if (!$idadeEntre16e17 && !$idadeAcimaDe70) {
            // Solicitando se a pessoa é analfabeta
            $analfabeto = ($alfabetizado === 'A') ? true : false;

            // Solicitando se o voto é obrigatório ou facultativo, considerando as condições especificadas
            $votoObrigatorio = (!$analfabeto) ? true : false;

            // Informando se o voto é obrigatório ou facultativo
            echo ($votoObrigatorio) ? "Voto obrigatório.\n" : "Voto facultativo.\n";
        }
    }
}

?>
