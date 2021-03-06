<?php

namespace wishlist\views;

class CommentaireLarge {
    private $commentaire;

    public function __construct($comm) {
        $this->commentaire = $comm;
    }

    public function afficher() {
        $msg   = $this->commentaire['commentaire'];
        $pseud = $this->commentaire['pseudo'];

        echo <<< end
        <div class="corpsCommentaire">
            <div>Par : $pseud </div>
            <div>$msg</div>
            </div>
            <span style="margin-bottom: 20px;"></span>
        end;
    }
}

?>