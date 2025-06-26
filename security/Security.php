<?php

class Security
{
    // Requiere que el usuario esté logueado
    public static function requireLogin()
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: /trabajo/index.php?route=login');
            exit;
        }
    }

    public static function requireRole($rol)
    {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== $rol) {
            header('Location: /trabajo/index.php?route=login');
            exit;
        }
    }

    // Sanitiza una cadena para evitar XSS
    public static function sanitize($input)
    {
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }

    // Sanitiza un array asociativo
    public static function sanitizeArray($arr)
    {
        foreach ($arr as $key => $value) {
            $arr[$key] = self::sanitize($value);
        }
        return $arr;
    }
}
