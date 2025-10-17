<?php

class BookNode {
    public $title;
    public $left;
    public $right;

    public function __construct($title) {
        $this->title = $title;
        $this->left = null;
        $this->right = null;
    }
}

class BookBST {
    public $root = null;

    public function add($title) {
        $this->root = $this->insertNode($this->root, $title);
    }

    private function insertNode($node, $title) {
        if ($node === null) {
            return new BookNode($title);
        }
        if (strcasecmp($title, $node->title) < 0) {
            $node->left = $this->insertNode($node->left, $title);
        } elseif (strcasecmp($title, $node->title) > 0) {
            $node->right = $this->insertNode($node->right, $title);
        }
        return $node;
    }

    public function searchBook($title) {
        return $this->searchNode($this->root, $title);
    }

    private function searchNode($node, $title) {
        if ($node === null) return false;
        if (strcasecmp($title, $node->title) == 0) return true;

        return (strcasecmp($title, $node->title) < 0)
            ? $this->searchNode($node->left, $title)
            : $this->searchNode($node->right, $title);
    }

    public function listBooks($node) {
        if ($node !== null) {
            $this->listBooks($node->left);
            echo $node->title . "<br>";
            $this->listBooks($node->right);
        }
    }
}

// Demo
$tree = new BookBST();
$bookTitles = ["Moby Dick", "Clean Code", "Superintelligence", "Pride and Prejudice", "The Diary of Anne Frank", "Deep Learning"];
foreach ($bookTitles as $t) {
    $tree->add($t);
}

echo "<h3>📖 Alphabetical List of Books (BST Traversal)</h3>";
$tree->listBooks($tree->root);

echo "<hr>";
echo "<b>Searching for 'Pride and Prejudice':</b> " . ($tree->searchBook("Pride and Prejudice") ? "Found!" : "Not Found.") . "<br>";
echo "<b>Searching for 'Dune':</b> " . ($tree->searchBook("Dune") ? "Found!" : "Not Found.") . "<br>";
?>
