<?php

namespace app\controller;

class ControllerNote
{
    //function to display the note submission form
    public function viewNoteForm()
    {
        require './display/DisplayForm.php';
    }

    //takes care of form submission/validates input/store messages.
    public function submitNote()
    {

        $title = $_POST['title'] ?? null;
        $description = $_POST['description'] ?? null;

        try {
            // checking title --> if length<=3 error message
            if (!$title || strlen($title) <= 3) {
                throw new \Exception("Title must be more than 3 characters");
            }

            // checking description --> if length<=10 error message
            if (!$description || strlen($description) <= 10) {
                throw new \Exception("Description must be more than 10 characters.");
            }

            // success message that outputs if no error caught
            $_SESSION['message'] = ['type' => 'success', 'text' => 'Note submitted successfully'];
        } catch (\Exception $e) //if error occurs catch the excepion 
        {
            $_SESSION['message'] = ['type' => 'error', 'text' => $e->getMessage()];
        }

        // redirecting back to form
        header("Location: index.php");
        exit();
    }
}
