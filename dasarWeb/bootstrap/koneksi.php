<?php
// koneksi.php
// Pastikan ekstensi pgsql aktif di php.ini

function get_pg_connection(): PgSql\Connection {
    static $conn = null;
    if ($conn instanceof PgSql\Connection) {
        return $conn;
    }

    $connStr = "host=localhost port=5432 dbname=phpdatabase user=postgres password=123 options='--client_encoding=UTF8'";
    $conn = @pg_connect($connStr);

    if (!$conn) {
        // Jangan pakai @ di produksi; untuk debug bisa tampilkan detail
        throw new RuntimeException("Koneksi PostgreSQL gagal. Periksa host/port/db/user/pass & ekstensi pgsql.");
    }
    return $conn;
}

/** Helper sederhana untuk aman menjalankan query dengan parameter */
function qparams(string $sql, array $params) {
    $conn = get_pg_connection();
    $res = @pg_query_params($conn, $sql, $params);
    if ($res === false) {
        throw new RuntimeException("Query gagal: " . pg_last_error($conn));
    }
    return $res;
}

function q(string $sql) {
    $conn = get_pg_connection();
    $res = @pg_query($conn, $sql);
    if ($res === false) {
        throw new RuntimeException("Query gagal: " . pg_last_error($conn));
    }
    return $res;
}

// Tambahan untuk menangani error kolom created_at yang tidak ada
// Bagian ini TIDAK mengubah koneksi, hanya membantu supaya query tidak error
function fix_created_at_query($sql) {
    try {
        return q($sql);
    } catch (RuntimeException $e) {
        if (strpos($e->getMessage(), 'column "created_at" does not exist') !== false) {
            // Ganti otomatis ke kolom created_id kalau created_at tidak ada
            $sql = str_replace('created_at', 'created_id', $sql);
            return q($sql);
        }
        throw $e; // lempar ulang kalau bukan error itu
    }
}
