<?php


class HtmlOutput extends Output
{
    public function render(array $data)
    {
        echo '<table>';
        echo "<tr>";
        $this->renderHead(array_keys(current($data)));
        echo '</tr>';
        foreach ($data as $row) {
            echo '<tr>';
            foreach ($row as $column) {
                echo "<td>{$column}</td>";
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    private function renderHead(array $columns)
    {
        foreach ($columns as $column) {
            echo "<th>{$column}</th>";
        }
    }
}