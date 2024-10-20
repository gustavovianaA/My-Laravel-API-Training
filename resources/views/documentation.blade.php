<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentação da API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }

        .method {
            font-weight: bold;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .GET {
            background-color: #28a745;
        }

        .POST {
            background-color: #007bff;
        }

        .PUT {
            background-color: #ffc107;
        }

        .DELETE {
            background-color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mb-4">Documentação da API</h1>
        @if($lang == 'eng')
            <p>This API Allows <code>/customers</code> HTTP Methods</p>
        @else
            <p>Esta API permite gerenciar informações de clientes através do endpoint <code>/customers</code> utilizando os métodos HTTP padrão.</p>
        @endif
        <!-- main acordion -->
        <div class="accordion mb-5" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Custommers
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <!-- custommer documentation -->

                        <!-- GET Method -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <span class="method GET">GET</span> /customers
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Descrição:</h5>
                                <p class="card-text">Retorna a lista de todos os clientes.</p>
                                <h6>Exemplo de Resposta:</h6>
                                <pre><code>{
"customers": [
    { "id": 1, "name": "John Doe", "email": "john@example.com" },
    { "id": 2, "name": "Jane Doe", "email": "jane@example.com" }
  ]
}</code></pre>
                            </div>
                        </div>

                        <!-- GET by ID Method -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <span class="method GET">GET</span> /customers/{id}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Descrição:</h5>
                                <p class="card-text">Retorna as informações de um cliente específico.</p>
                                <h6>Exemplo de Resposta:</h6>
                                <pre><code>{
  "id": 1,
  "name": "John Doe",
  "email": "john@example.com"
}</code></pre>
                            </div>
                        </div>

                        <!-- POST Method -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <span class="method POST">POST</span> /customers
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Descrição:</h5>
                                <p class="card-text">Cria um novo cliente.</p>
                                <h6>Corpo da Requisição:</h6>
                                <pre><code>{
  "name": "John Doe",
  "email": "john@example.com"
}</code></pre>
                                <h6>Exemplo de Resposta:</h6>
                                <pre><code>{
  "message": "Cliente criado com sucesso",
  "customer": { "id": 3, "name": "John Doe", "email": "john@example.com" }
}</code></pre>
                            </div>
                        </div>

                        <!-- PUT Method -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <span class="method PUT">PUT</span> /customers/{id}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Descrição:</h5>
                                <p class="card-text">Atualiza as informações de um cliente existente.</p>
                                <h6>Corpo da Requisição:</h6>
                                <pre><code>{
  "name": "Jane Doe",
  "email": "jane@example.com"
}</code></pre>
                                <h6>Exemplo de Resposta:</h6>
                                <pre><code>{
  "message": "Cliente atualizado com sucesso",
  "customer": { "id": 1, "name": "Jane Doe", "email": "jane@example.com" }
}</code></pre>
                            </div>
                        </div>

                        <!-- DELETE Method -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <span class="method DELETE">DELETE</span> /customers/{id}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Descrição:</h5>
                                <p class="card-text">Remove um cliente existente.</p>
                                <h6>Exemplo de Resposta:</h6>
                                <pre><code>{
  "message": "Cliente removido com sucesso"
}</code></pre>
                            </div>
                        </div>

                        <!-- end of custommer documenttion-->

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
        <!-- end of main accordion -->

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>