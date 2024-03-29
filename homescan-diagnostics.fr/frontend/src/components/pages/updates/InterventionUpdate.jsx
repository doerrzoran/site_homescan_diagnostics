import { useEffect, useState } from "react";
import { useGetInterventionSectorQuery } from "../../../slices/ApiSlice";
import { useUpdateInterventionMutation } from "../../../slices/UpdateSlice";

export default function InterventionUpdate() {
    const { data, loading } = useGetInterventionSectorQuery()
    const [newTitle, setNewTitle] = useState(data?.title ?? '')
    const [newText, setNewText] = useState(data?.text ?? '')
    const [updateSocietyPage, { isLoading, isError }] = useUpdateInterventionMutation()

    useEffect(() => {
        if (data && data.title) {
            setNewTitle(data.title);
        }
        if (data && data.text) {
            setNewText(data.text);
        }
    }, [data]);

    const handleSubmit = (e) => {
        e.preventDefault();
        updateSocietyPage({ 
            title: newTitle,
            text: newText, 
        }); // Call the mutation with the new title
        setNewTitle(newTitle); // Clear the input field after submitting
        setNewText(newText);
         // Clear the input field after submitting
    };

  return (
    <div className="container">
    <div>
        <h2>modifier la page d'accueil</h2>
        <form onSubmit={handleSubmit} className="mt-3">
            <div className="form-group">
                <label htmlFor="newTitle">Titre:</label>
                <input
                    type="text"
                    className="form-control"
                    id="newTitle"
                    value={newTitle}
                    onChange={(e) => setNewTitle(e.target.value)}
                />
            </div>
            <div className="form-group">
                <label htmlFor="newText">text:</label>
                <textarea
                    className="form-control"
                    id="newText"
                    rows="5"
                    value={newText}
                    onChange={(e) => setNewText(e.target.value)}>
                </textarea>
            </div>
            <button type="submit" className="btn btn-primary" disabled={isLoading}>
                {isLoading ? 'Modification en cours...' : 'Éditer'}
            </button>
            {isError && <p className="text-danger">Error updating.</p>}
        </form>
    </div>
</div>

  );
};
