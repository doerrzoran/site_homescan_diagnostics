
import { useState } from "react";
import { useUpdateHomePageMutation } from "../../slices/UpdateSlice";

export default function Admin() {
  const [newTitle, setNewTitle] = useState('');
  const [updateHomePage, { isLoading, isError }] = useUpdateHomePageMutation();

  const handleSubmit = (e) => {
    e.preventDefault();
    updateHomePage({ title: newTitle }); // Call the mutation with the new title
    setNewTitle(''); // Clear the input field after submitting
  };

  return (
    <div>
      <h2>Admin Panel</h2>
      <form onSubmit={handleSubmit}>
        <label htmlFor="newTitle">New Title:</label>
        <input
          type="text"
          id="newTitle"
          value={newTitle}
          onChange={(e) => setNewTitle(e.target.value)}
        />
        <button type="submit" disabled={isLoading}>
          {isLoading ? 'Updating...' : 'Update Title'}
        </button>
        {isError && <p>Error updating title.</p>}
      </form>
    </div>
  );
}
