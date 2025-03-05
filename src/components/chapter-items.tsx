import Link from 'next/link';

// メインリストアイテムのコンポーネント
export type ChapterItemProps = {
  to: string;
  title: string;
  isActive?: boolean;
  children?: React.ReactNode;
};

export const ChapterItem = ({ to, title, isActive = false, children }: ChapterItemProps) => {
  return (
    <li className="group" {...(isActive ? { 'data-current': true } : {})}>
      <Link href={to} className="relative block">
        {/* アクティブ時に表示される丸いマーカー */}
        <span className="bg-primary-dark absolute top-2 -left-11 hidden h-2.5 w-2.5 rounded-xs group-data-[current]:block"></span>
        {/* チャプタータイトル */}
        <span className="relative">{title}</span>
        {/* アクティブ時の背景ハイライト */}
        <span className="bg-primary-dark/10 absolute top-[50%] -left-13 hidden h-[calc(100%+10px)] w-[calc(100%+52px)] -translate-y-1/2 rounded-md group-data-[current]:block"></span>
      </Link>
      {children}
    </li>
  );
};

// サブリストアイテムのコンポーネント
export type SubChapterItemProps = {
  to: string;
  title: string;
  isActive?: boolean;
};

export const SubChapterItem = ({ to, title, isActive = false }: SubChapterItemProps) => {
  return (
    <li className="group" {...(isActive ? { 'data-current': true } : {})}>
      <Link href={to} className="relative block">
        {/* アクティブ時に表示される丸いマーカー（位置が異なる） */}
        <span className="bg-primary-dark absolute top-2 -left-15 hidden h-2.5 w-2.5 rounded-xs group-data-[current]:block"></span>
        {/* サブチャプタータイトル */}
        <span className="relative">{title}</span>
        {/* アクティブ時の背景ハイライト（サイズと位置が異なる） */}
        <span className="bg-primary-dark/10 absolute top-[50%] -left-17 hidden h-[calc(100%+10px)] w-[calc(100%+68px)] -translate-y-1/2 rounded-md group-data-[current]:block"></span>
      </Link>
    </li>
  );
};
