<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: evert
 * Date: 02/06/2017
 * Time: 18:37
 */
class Controle extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model','user');
    }


    // FUNÇÕES DE MENSAGEM

    public function getMensage()
    {
        $this->load->model('Mensage_model','mensage');

        $return = [
            'title' => $this->mensage->getTitle(),
            'subtitle' => $this->mensage->getSubtitle(),
        ];

        echo(json_encode($return));
    }

    public function atualizarMensagem($token)
    {
        $this->load->model('Mensage_model','mensage');

        $this->mensage->setTitle($_POST['title']);
        $this->mensage->setSubtitle($_POST['subtitle']);

        echo(json_encode([true]));
    }

    // FUNÇÕES DE IMG
    public function recebeImg($file, $destino,$instance)
    {
        $img_tmp = $file[ 'img' ][ 'tmp_name' ];
        echo $img_tmp;
        echo '<br>';
        $nome = $file[ 'img' ][ 'name' ];
     
        // Pega a extensão
        $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
     
        // Converte a extensão para minúsculo
        $extensao = strtolower ( $extensao );
     
        // Somente imagens, .jpg;.jpeg;.gif;.png
        // Aqui eu enfileiro as extensões permitidas e separo por ';'
        // Isso serve apenas para eu poder pesquisar dentro desta String
        if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) 
        {
            // Cria um nome único para esta imagem
            // Evita que duplique as imagens no servidor.
            // Evita nomes com acentos, espaços e caracteres não alfanuméricos
            $novoNome = $instance->getTitle() . '.' . $extensao;

            // Concatena a pasta com o nome
            $destino = '/home/agencia.com.br/public/assets/img/'.$destino.'/'. $novoNome;
     
            // tenta mover o img para o destino
            if ( @move_uploaded_file ( $img_tmp, $destino ) ) 
            {

                $this->instance->setImg($novoNome);
                if (empty($file['img']))
                {
                    $instance->setImg('default.png');
                }

                echo json_encode($instance->add());
            }
            else
                print_r($destino);
                return false;
        }
        else
            return false;
    }


    // FUNÇÕES DE COUNT

    public function getCountMenu()
    {
        $this->load->model('Menus_model','instance');

        echo(json_encode($this->instance->count()));
    }

    public function getCountService()
    {
        $this->load->model('Services_model','instance');

        echo(json_encode($this->instance->count()));
    }

    public function getCountPortfolio()
    {
        $this->load->model('Portfolio_model','instance');

        echo(json_encode($this->instance->count()));
    }

    public function getCountAbout()
    {
        $this->load->model('Abouts_model','instance');

        echo(json_encode($this->instance->count()));
    }

    public function getCountTeam()
    {
        $this->load->model('Team_model','instance');

        echo(json_encode($this->instance->count()));
    }

    public function getCountPartner()
    {
        $this->load->model('Partners_model','instance');

        echo(json_encode($this->instance->count()));
    }

    // FUNÇÕES DE MENU


    /**
     * @param $token
     */
    public function getMenuList($token)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Menus_model','instance');
            echo json_encode($this->instance->getMenuList());
        }
        else
        {
            echo json_encode("");
        }
    }


    // /**
    //  * @param $token
    //  */
    // public function addMenu($token)
    // {
    //     if ($this->user->isValidToken($token)) {

    //         $this->load->model('Menus_model','instance');

    //         $this->instance->setMenu($_POST['menu']);
    //         $this->instance->setLink($_POST['link']);

    //         echo json_encode($this->instance->add());
    //     }
    //     else
    //     {
    //         echo json_encode("");
    //     }
    // }

    // /**
    //  * @param $token
    //  * @param $id
    //  */
    // public function editMenu($token, $id)
    // {
    //     if ($this->user->isValidToken($token)) {

    //         $this->load->model('Menus_model','instance');

    //         $this->instance->setName($_POST['name']);
    //         $this->instance->setLink($_POST['link']);

    //         echo json_encode($this->instance->edit($id));
    //     }
    //     else
    //     {
    //         echo json_encode("");
    //     }
    // }

    // /**
    //  * @param $token
    //  * @param $id
    //  */
    // public function deleteMenu($token, $id)
    // {
    //     if ($this->user->isValidToken($token)) {

    //         $this->load->model('Menus_model','instance');

    //         echo json_encode($this->instance->remove($id));
    //     }
    //     else
    //     {
    //         echo json_encode("");
    //     }
    // }


    // FUNÇÕES DE PORTIFOLIO


    /**
     * @param $token
     */
    public function getPortfolioList($token)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Portfolio_model','instance');
            echo json_encode($this->instance->getPortfolioList());
        }
        else
        {
            echo json_encode("");
        }
    }


    /**
     * @param $token
     */
    public function addPortfolio($token)
    {
        if ($this->user->isValidToken($token)) {

            if ( isset( $_FILES[ 'img' ][ 'name' ] ) && $_FILES[ 'img' ][ 'error' ] == 0 )
            {

                $this->load->model('Portfolio_model','instance');

                $this->instance->setTitle($_POST['title']);
                $this->instance->setSubtitle($_POST['subtitle']);
                $this->instance->setDescription($_POST['description']);

                $this->recebeImg($_FILES,'portfolio',$this->instance);
            }
            else
                echo 'Você não enviou nenhum arquivo!';
        }
        else
        {
            echo json_encode("");
        }
    }

    /**
     * @param $token
     * @param $id
     */
    public function editPortfolio($token, $id)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Portfolio_model','instance');

            $this->instance->setTitle($_POST['title']);
            $this->instance->setSubtitle($_POST['subtitle']);
            $this->instance->setDescription($_POST['description']);
            $this->instance->setImg($_POST['img']);

            echo json_encode($this->instance->edit($id));
        }
        else
        {
            echo json_encode("");
        }
    }

    /**
     * @param $token
     * @param $id
     */
    public function deletePortfolio($token, $id)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Portfolio_model','instance');

            echo json_encode($this->instance->remove($id));
        }
        else
        {
            echo json_encode("");
        }
    }


    // FUNÇÕES DE EQUIPE


    /**
     * @param $token
     */
    public function getTeamList($token)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Team_model','instance');
            echo json_encode($this->instance->getTeamList());
        }
        else
        {
            echo json_encode("");
        }
    }


    /**
     * @param $token
     */
    public function addTeam($token)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Team_model','instance');

            if ( isset( $_FILES[ 'img' ][ 'name' ] ) && $_FILES[ 'img' ][ 'error' ] == 0 )
            {
                $this->instance->setImg($_POST['img']);
                $this->instance->setName($_POST['name']);
                $this->instance->setOffice($_POST['office']);
                $this->instance->setTwitter($_POST['twitter']);
                $this->instance->setFace($_POST['face']);
                $this->instance->setLinkedin($_POST['linkedin']);

                $this->recebeImg($_FILES,'team',$this->instance);
            }
            else
            {
                return false;
            }
        }
        else
        {
            echo json_encode("");
        }
    }

    /**
     * @param $token
     * @param $id
     */
    public function editTeam($token, $id)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Team_model','instance');

            $this->instance->setImg($_POST['img']);
            $this->instance->setName($_POST['name']);
            $this->instance->setOffice($_POST['office']);
            $this->instance->setTwitter($_POST['twitter']);
            $this->instance->setFace($_POST['face']);
            $this->instance->setLinkedin($_POST['linkedin']);

            echo json_encode($this->instance->edit($id));
        }
        else
        {
            echo json_encode("");
        }
    }

    /**
     * @param $token
     * @param $id
     */
    public function deleteTeam($token, $id)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Portifolio_model','instance');

            echo json_encode($this->instance->remove($id));
        }
        else
        {
            echo json_encode("");
        }
    }


    // FUNÇÕES DE SERVIÇO


    /**
     * @param $token
     */
    public function getServiceList($token)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Services_model','instance');
            echo json_encode($this->instance->getServiceList());
        }
        else
        {
            echo json_encode("");
        }
    }


    /**
     * @param $token
     */
    public function addService($token)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Services_model','instance');

            $this->instance->setTitle($_POST['title']);
            $this->instance->setDescription($_POST['description']);
            $this->instance->setIcon($_POST['icon']);

            echo json_encode($this->instance->add());
        }
        else
        {
            echo json_encode("");
        }
    }

    /**
     * @param $token
     * @param $id
     */
    public function editService($token, $id)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Services_model','instance');

            $this->instance->setTitle($_POST['title']);
            $this->instance->setDescription($_POST['description']);
            $this->instance->setIcon($_POST['icon']);
            
            echo json_encode($this->instance->edit($id));
        }
        else
        {
            echo json_encode("");
        }
    }

    /**
     * @param $token
     * @param $id
     */
    public function deleteService($token, $id)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Services_model','instance');

            echo json_encode($this->instance->remove($id));
        }
        else
        {
            echo json_encode("");
        }
    }


    // FUNÇÕES DE HISTORIA


    /**
     * @param $token
     */
    public function getAboutList($token)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Abouts_model','instance');
            echo json_encode($this->instance->getAboutList());
        }
        else
        {
            echo json_encode("");
        }
    }


    /**
     * @param $token
     */
    public function addAbout($token)
    {
        if ($this->user->isValidToken($token)) {
            if ( isset( $_FILES[ 'img' ][ 'name' ] ) && $_FILES[ 'img' ][ 'error' ] == 0 )
            {
                $this->load->model('Abouts_model','instance');

                $this->instance->setYear($_POST['year']);
                $this->instance->setTitle($_POST['title']);
                $this->instance->setDescription($_POST['description']);

                $this->recebeImg($_FILES,'about',$this->instance);


            }
            else
            {
                return false;
            }
        }
        else
        {
            echo json_encode("");
        }
    }

    /**
     * @param $token
     * @param $id
     */
    public function editAbout($token, $id)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Abouts_model','instance');

            $this->instance->setImg($_POST['img']);
            $this->instance->setYear($_POST['year']);
            $this->instance->setTitle($_POST['title']);
            $this->instance->setDescription($_POST['description']);
            
            echo json_encode($this->instance->edit($id));
        }
        else
        {
            echo json_encode("");
        }
    }

    /**
     * @param $token
     * @param $id
     */
    public function deleteAbout($token, $id)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Abouts_model','instance');

            echo json_encode($this->instance->remove($id));
        }
        else
        {
            echo json_encode("");
        }
    }


    // FUNÇÕES DE PARTNERS


    /**
     * @param $token
     */
    public function getPartnersList($token)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Partners_model','instance');
            echo json_encode($this->instance->getPartnersList());
        }
        else
        {
            echo json_encode("");
        }
    }


    /**
     * @param $token
     */
    public function addPartners($token)
    {
        if ($this->user->isValidToken($token)) {
            if ( isset( $_FILES[ 'img' ][ 'name' ] ) && $_FILES[ 'img' ][ 'error' ] == 0 )
            {
                $this->load->model('Partners_model','instance');

                $this->instance->setName($_POST['name']);
                $this->instance->setUrl($_POST['url']);
                
                $this->recebeImg($_FILES,'logos',$this->instance);
            }
            else
            {
                return false;
            }
        }
        else
        {
            echo json_encode("");
        }
    }

    /**
     * @param $token
     * @param $id
     */
    public function editPartners($token, $id)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Partners_model','instance');

            $this->instance->setName($_POST['name']);
            $this->instance->setImg($_POST['img']);
            $this->instance->setUrl($_POST['url']);
            
            echo json_encode($this->instance->edit($id));
        }
        else
        {
            echo json_encode("");
        }
    }

    /**
     * @param $token
     * @param $id
     */
    public function deletePartners($token, $id)
    {
        if ($this->user->isValidToken($token)) {

            $this->load->model('Partners_model','instance');

            echo json_encode($this->instance->remove($id));
        }
        else
        {
            echo json_encode("");
        }
    }
}