<?php
class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = "Bem-vindo(a) a lista de punições do {server}.";
        $array["index.welcome.sub"] = "Aqui todas as punições ficam armazenadas e listadas.";

        $array["title.index"] = 'Início';
        $array["title.bans"] = 'Bans';
        $array["title.mutes"] = 'Mutes';
        $array["title.warnings"] = 'Avisos';
        $array["title.kicks"] = 'Kicks';
        $array["title.player-history"] = "Punições recentes para {name}";
        $array["title.staff-history"] = "Punições recentes de {name}";


        $array["generic.ban"] = "Ban";
        $array["generic.mute"] = "Mute";
        $array["generic.warn"] = "Aviso";
        $array["generic.kick"] = "Kick";

        $array["generic.banned"] = "Banido";
        $array["generic.muted"] = "Mutado";
        $array["generic.warned"] = "Avisado";
        $array["generic.kicked"] = "Kickado";

        $array["generic.banned.by"] = $array["generic.banned"] . " por";
        $array["generic.muted.by"] = $array["generic.muted"] . " por";
        $array["generic.warned.by"] = $array["generic.warned"] . " por";
        $array["generic.kicked.by"] = $array["generic.kicked"] . " por";

        $array["generic.ipban"] = "IP " . $array["generic.ban"];
        $array["generic.ipmute"] = "IP " . $array["generic.mute"];

        $array["generic.permanent"] = "Permanente";
        $array["generic.permanent.ban"] = $array['generic.permanent'] . ' ' . $array["generic.ban"];
        $array["generic.permanent.mute"] = $array['generic.permanent'] . ' ' . $array["generic.mute"];

        $array["generic.type"] = "Tipo";
        $array["generic.active"] = "Ativo";
        $array["generic.inactive"] = "Inativo";
        $array["generic.expired"] = "Expirado";
        $array["generic.player-name"] = "Jogador";

        $array["page.expired.ban"] = '(Desbanido)';
        $array["page.expired.ban-by"] = '(Desbanido por {name})';
        $array["page.expired.mute"] = '(Desmutado)';
        $array["page.expired.mute-by"] = '(Desmutado por {name})';
        $array["page.expired.warning"] = '(' . $array["generic.expired"] . ')';

        $array["table.player"] = $array["generic.player-name"];
        $array["table.type"] = $array["generic.type"];
        $array["table.executor"] = "Staff";
        $array["table.reason"] = "Motivo";
        $array["table.date"] = "Data";
        $array["table.expires"] = "Expira";
        $array["table.received-warning"] = "Aviso recebido";

        $array["table.server.name"] = "Mundo";
        $array["table.server.scope"] = "Mundo";
        $array["table.server.origin"] = "Mundo de origem";
        $array["table.server.global"] = "*";
        $array["table.pager.number"] = "Página";

        $array["action.check"] = "Check";
        $array["action.return"] = "Voltar para {origin}";

        $array["error.missing-args"] = "Falta argumentos.";
        $array["error.name.unseen"] = "{name} nunca entrou no LoSCraft.";
        $array["error.name.invalid"] = "Nome inválido.";
        $array["history.error.uuid.no-result"] = "Nenhuma punição encontrada.";
        $array["info.error.id.no-result"] = "Error: {type} não encontrado no banco de dados.";

    }
}
