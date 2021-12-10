<?php

    namespace App\controllers;

    use App\controllers\BaseController;
    use App\models\PostManager;
    use App\config\PDOFactory;

    class FrontController extends BaseController
    {
        public function executeIndex()
        {
            echo("c'est l'index");
            
        }

        public function executePostList()
        {
            $manager = new PostManager(PDOFactory::getMysqlConnection());
            $data = $manager->getAllPosts();

            /* echo($data); */

            return $this->render('Liste des Posts', ['posts' => $data], 'postList');
        }

        public function executePostById()
        {
            $manager = new PostManager(PDOFactory::getMysqlConnection());
            $id = $this->params["id"];
            $data = $manager->getPostById($id);

            /* echo($data); */

            return $this->render("'Post numéro'+$id", ['posts' => $data], 'post');
        }

        public function executeCreatePost()
        {

            return $this->render('Page d\'accueil', [], 'createPost');

        }

        public function executeShow()
        {
            $manager = new PostManager();
            $article = $manager->getPostById($this->params['id']);

            if (!$article) {
                header('Location: /');
                exit();
            }

            return $this->render($article->getTitle(), ['article' => $article],'Frontend/show');
        }
    }

?>