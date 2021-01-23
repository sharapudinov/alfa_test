SELECT dep_name, page_name
FROM DEPARTMENT_TAB
         JOIN USERS_TAB
              ON DEPARTMENT_TAB.dep_id = USERS_TAB.department_id
         JOIN LOG_TAB
              ON login = user_login
GROUP BY dep_name, page_name
