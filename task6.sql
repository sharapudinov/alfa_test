SELECT dep_name, count(page_name) cnt
FROM DEPARTMENT_TAB
         JOIN USERS_TAB
              ON DEPARTMENT_TAB.dep_id = USERS_TAB.department_id
         JOIN LOG_TAB
              ON login = user_login
WHERE page_name = 'account.php'
GROUP BY dep_name
ORDER BY cnt DESC
LIMIT 1
