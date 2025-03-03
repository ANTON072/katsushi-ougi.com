import { PostPreview } from '@/components';

export default function Home() {
  return (
    <div className="grid gap-4">
      {Array.from({ length: 10 }, (_, i) => (
        <PostPreview key={i} />
      ))}
    </div>
  );
}
