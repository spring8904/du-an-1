<?php
if (!function_exists('getSalesByDay')) {
    function getSalesByDay($day)
    {
        try {
            $sql = "SELECT SUM(tong_tien) as total
                    FROM `tb_don_hang`
                    WHERE DAY(ngay_dat) = $day 
                    AND MONTH(ngay_dat) = MONTH(CURDATE())
                    AND YEAR(ngay_dat) = YEAR(CURDATE())
                    AND id_tt = 6;";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('getSalesByMonth')) {
    function getSalesByMonth($month)
    {
        try {
            $sql = "SELECT SUM(tong_tien) as total
                    FROM `tb_don_hang`
                    WHERE MONTH(ngay_dat) = $month 
                    AND YEAR(ngay_dat) = YEAR(CURDATE())
                    AND id_tt = 6;";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('getSalesByYear')) {
    function getSalesByYear($year)
    {
        try {
            $sql = "SELECT SUM(tong_tien) as total
                    FROM `tb_don_hang`
                    WHERE YEAR(ngay_dat) = $year AND id_tt = 6;";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('getSalesByWeek')) {
    function getSalesByWeek()
    {
        try {
            $sql = "SELECT SUM(tong_tien) AS total
                    FROM `tb_don_hang`
                    WHERE WEEK(ngay_dat) = WEEK(CURDATE()) 
                    AND MONTH(ngay_dat) = MONTH(CURDATE())
                    AND YEAR(ngay_dat) = YEAR(CURDATE()) 
                    AND id_tt = 6;";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('thong_ke_theo_ngay')) {
    function thong_ke_theo_ngay()
    {
        try {
            $sql = "SELECT SUM(tong_tien) AS total, ngay_dat, DAY(ngay_dat) AS day 
                    FROM`tb_don_hang`
                    WHERE id_tt = 6 
                    AND MONTH(ngay_dat) = MONTH(CURDATE())
                    AND YEAR(ngay_dat) = YEAR(CURDATE())
                    GROUP BY DAY(ngay_dat)
                    ORDER BY DAY(ngay_dat);";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('thong_ke_theo_tuan')) {
    function thong_ke_theo_tuan()
    {
        try {
            $sql = "SELECT
                        SUM(tong_tien) AS total,
                        CONCAT('Tuần ', WEEK(ngay_dat) - WEEK(DATE_FORMAT(ngay_dat, '%Y-%m-01')) + 1) AS ngay,
                        DATE_FORMAT(ngay_dat, '%m-%Y') AS month
                    FROM `tb_don_hang`
                    WHERE 
                        YEAR(ngay_dat) = YEAR(CURDATE()) 
                        AND MONTH(ngay_dat) = MONTH(CURDATE())
                        AND id_tt = 6
                    GROUP BY WEEK(ngay_dat), DATE_FORMAT(ngay_dat, '%m-%Y')
                    ORDER BY DATE_FORMAT(ngay_dat, '%m-%Y'), WEEK(ngay_dat);";

            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('thong_ke_theo_thang')) {
    function thong_ke_theo_thang()
    {
        try {
            $sql = "SELECT SUM(tong_tien) AS total, DATE_FORMAT(ngay_dat, '%m') AS month
                    FROM `tb_don_hang`
                    WHERE YEAR(ngay_dat) = YEAR(CURDATE())
                    AND id_tt = 6
                    GROUP BY DATE_FORMAT(ngay_dat, '%m')
                    ORDER BY DATE_FORMAT(ngay_dat, '%m')";

            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('thong_ke_theo_nam')) {
    function thong_ke_theo_nam()
    {
        try {
            $sql = "SELECT  YEAR(ngay_dat) AS year, SUM(tong_tien) AS total
                    FROM `tb_don_hang`
                    WHERE YEAR(ngay_dat) - 5  AND id_tt = 6
                    GROUP BY YEAR(ngay_dat)
                    ORDER BY YEAR(ngay_dat);";

            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
