<?php

// Solicita que o usuário digite uma senha
$senha = readline("Digite uma senha: ");

// Verifica se a senha possui pelo menos 8 caracteres
if (strlen($senha) < 8) {
    echo "Senha inválida! A senha deve ter pelo menos 8 caracteres.\n";
} 
// Verifica se possui pelo menos uma letra maiúscula
elseif (!preg_match('/[A-Z]/', $senha)) {
    echo "Senha inválida! A senha deve possuir uma letra maiúscula.\n";
}
// Verifica se possui pelo menos uma letra minúscula
elseif (!preg_match('/[a-z]/', $senha)) {
    echo "Senha inválida! A senha deve possuir uma letra minúscula.\n";
}
// Verifica se possui pelo menos um número
elseif (!preg_match('/[0-9]/', $senha)) {
    echo "Senha inválida! A senha deve possuir um número.\n";
}
// Verifica se possui pelo menos um caractere especial
elseif (!preg_match('/[^a-zA-Z0-9]/', $senha)) {
    echo "Senha inválida! A senha deve possuir um caractere especial.\n";
}
// Se passou por todas as verificações
else {
    echo "Senha válida! Sua senha atende a todos os requisitos.\n";
}

?>