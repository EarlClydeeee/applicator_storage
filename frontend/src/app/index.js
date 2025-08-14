import { useEffect, useState } from "react";

export default function Home() {
  const [applicators, setApplicators] = useState([]);

  useEffect(() => {
    fetch("http://localhost/api/get_applicators.php")
      .then(res => res.json())
      .then(data => setApplicators(data))
      .catch(err => console.error(err));
  }, []);

  return (
    <div>
      <h1>Applicators List</h1>
      <ul>
        {applicators.map((item) => (
          <li key={item.id}>
            {item.name} - {item.type} - {item.output_count}
          </li>
        ))}
      </ul>
    </div>
  );
}
