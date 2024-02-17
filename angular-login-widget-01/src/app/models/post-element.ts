export interface PostElement {
  id: string;
  alt_text: string;
  content: string;
  content_type?: string;
  type: string;
  elements?: PostElement[];
}
