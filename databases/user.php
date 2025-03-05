<?php

function addUser(string $email, string $fullname, string $image, string $birthdate): bool
{
    $conn = getConnection();
    $sql = 'INSERT INTO user (email, fullname, image, birthdate) VALUES (?, ?, ?, ?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $email, $fullname, $image, $birthdate);
    $stmt->execute();
    return $stmt->affected_rows > 0;
}

function getUsers(): array
{
    $conn = getConnection();
    $sql = 'SELECT * FROM user';
    $result = $conn->query($sql);
    $users = [];
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    return $users;
}

function deleteUserById(int $id): bool
{
    $conn = getConnection();
    $sql = 'DELETE FROM user WHERE idx = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->affected_rows > 0;
}