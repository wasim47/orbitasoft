import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';

interface SubMenu {
  id: number;
  title: string;
  uri: string;
}

interface Menu {
  id: number;
  title: string;
  uri: string;
  sub_menu: SubMenu[];
}

const NavLinks: React.FC = () => {
  const [data, setData] = useState<Menu[]>([]);
  const [isLoading, setLoading] = useState<boolean>(true);
  const [error, setError] = useState<string | null>(null);
  const API_BASE_URL = import.meta.env.VITE_API_BASE_URL;

  useEffect(() => {
    const fetchApi = async () => {
      try {
        const response = await fetch(`${API_BASE_URL}/menus`);
        if (!response.ok) throw new Error("Data not fetching");

        const result = await response.json();
        setData(result.data);
      } catch (error: any) {
        setError(error.message);
        console.log(error);
      } finally {
        setLoading(false);
      }
    };

    fetchApi();
  }, []);

  if (isLoading) return <div>Loading...</div>;
  if (error) return <div className="alert alert-danger">Error: {error}</div>;

  return (
    <div className="header-middle">
      <div className="mean__menu-wrapper">
        <div className="main-menu">
          <nav id="mobile-menu">

            {/* <ul>
              <li>
                <a href="/">Home</a>
              </li>
              {
                data.map((menu) => (
                  <li>
                    <a href="about.html">
                      { menu.title } 
                      {menu.sub_menu.length > 0 && <i className="fas fa-angle-down"></i>}
                    </a>
                    <ul className="submenu">
                      { 
                      menu.sub_menu.map((smenu) => (
                        <li><a href="service.html">{ smenu.title }</a></li>
                      ))
                      }
                    </ul>
                  </li>
                ))
              }
            </ul> */}

            <ul>
              {
                data.map((menu) => (
                  <li key={menu.id}>
                    <Link to={menu.uri}>
                      {menu.title}
                      {menu.sub_menu.length > 0 && <i className="fas fa-angle-down"></i>}
                    </Link>
                    {menu.sub_menu.length > 0 && (
                      <ul className="submenu">
                        {
                          menu.sub_menu.map((smenu) => (
                            <li key={smenu.id}>
                              <Link to={menu.uri+"/"+smenu.uri}>{smenu.title}</Link>
                            </li>
                          ))
                        }
                      </ul>
                    )}
                  </li>
                ))
              }
            </ul>
          </nav>
        </div>
      </div>
    </div>
  );
};

export default NavLinks;
