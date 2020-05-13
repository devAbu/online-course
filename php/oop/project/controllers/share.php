<?php

class Share extends Controller
{
    protected function Index()
    {
        $viewModel = new ShareModel();

        $this->returnView($viewModel->Index(), true);
    }

    protected function add()
    {

        if (!isset($_SESSION['is_logged_in'])) {
            header("Location: " . ROOT_URL . "share");
        }

        $viewModel = new ShareModel();

        $this->returnView($viewModel->add(), true);
    }
}
