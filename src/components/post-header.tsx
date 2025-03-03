import Link from 'next/link';

import TagChip from '@/components/tag-chip';
import { timeFormat } from '@/utils';

export default function PostHeader() {
  const dateStr = timeFormat('2025-02-20T14:46:15.021Z');

  return (
    <header className="link-container">
      <Link href={`/posts/1`}>
        <h2 className="mb-2 text-xl font-bold">投稿タイトル</h2>
      </Link>
      <div className="grid grid-cols-[auto_1fr] items-center gap-2">
        <time dateTime={dateStr} className="font-en text-text-secondary">
          {dateStr}
        </time>
        <div className="flex flex-wrap gap-1">
          <TagChip />
          <TagChip />
          <TagChip />
        </div>
      </div>
    </header>
  );
}
