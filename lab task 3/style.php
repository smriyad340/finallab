<?php

header("Content-Type: text/css");

?>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    background: #f2f4f7;
    min-height: 100vh;
}

.container {
    width: 100%;
    min-height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;

    padding: 30px;
}

.card,
.dashboard-card {
    width: 100%;
    max-width: 600px;

    background: white;

    padding: 35px;

    border-radius: 12px;

    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
}

h1 {
    text-align: center;
    color: #222;
    margin-bottom: 8px;
}

.subtitle {
    text-align: center;
    color: #777;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;

    font-weight: bold;
    color: #333;
}

input,
select {
    width: 100%;

    padding: 12px;

    border: 1px solid #ccc;
    border-radius: 6px;

    font-size: 15px;

    outline: none;
}

input:focus,
select:focus {
    border-color: #333;
}

.btn {
    display: inline-block;

    text-decoration: none;

    border: none;

    background: #222;
    color: white;

    padding: 12px 20px;

    border-radius: 6px;

    cursor: pointer;

    font-size: 15px;

    text-align: center;
}

form .btn {
    width: 100%;
}

.btn:hover {
    opacity: 0.85;
}

.dashboard-card {
    max-width: 700px;
}

.section {
    margin-top: 25px;

    padding: 20px;

    border: 1px solid #ddd;

    border-radius: 8px;
}

.section h2 {
    margin-bottom: 15px;

    font-size: 20px;

    color: #333;
}

.info {
    padding: 10px 0;

    border-bottom: 1px solid #eee;

    color: #444;
}

.info:last-child {
    border-bottom: none;
}

.message {
    padding: 15px;

    border-radius: 6px;

    margin-top: 10px;
}

.error {
    background: #ffe5e5;
    color: #b30000;
}

.buttons {
    display: flex;

    flex-wrap: wrap;

    gap: 10px;

    margin-top: 25px;

    justify-content: center;
}

.danger {
    background: #dc3545;
}

.warning {
    background: #f39c12;
}

.secondary {
    background: #555;
}

@media (max-width: 600px) {

    .card,
    .dashboard-card {
        padding: 25px;
    }

    .buttons {
        flex-direction: column;
    }

    .buttons .btn {
        width: 100%;
    }

}