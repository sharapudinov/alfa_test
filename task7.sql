SELECT udate, user_login, page_name, cnt
FROM LOG_TAB lt
         JOIN (SELECT udate ud, user_login ul, count(page_name) cnt
               FROM LOG_TAB
               GROUP BY user_login, udate) A
              ON user_login = ul AND ud = udate
