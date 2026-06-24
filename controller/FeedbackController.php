<?php

class FeedbackController
{
    private $api = "https://6a3b3d8ee4a07f202e14b5d0.mockapi.io/feedbacks/feedbacks";

    // LISTAR
    public function listar()
    {
        $response = file_get_contents($this->api);
        return json_decode($response, true);
    }

    // CRIAR
    public function salvar($dados)
    {
        $payload = [
            "nome" => $dados['nome'],
            "mensagem" => $dados['mensagem'],
            "nota" => $dados['nota']
        ];

        $options = [
            "http" => [
                "header"  => "Content-Type: application/json",
                "method"  => "POST",
                "content" => json_encode($payload)
            ]
        ];

        $context = stream_context_create($options);

        file_get_contents($this->api, false, $context);
    }

    // DELETAR (opcional agora, mas já pronto)
    public function deletar($id)
    {
        $url = $this->api . "/" . $id;

        $options = [
            "http" => [
                "method" => "DELETE"
            ]
        ];

        $context = stream_context_create($options);

        file_get_contents($url, false, $context);
    }
}